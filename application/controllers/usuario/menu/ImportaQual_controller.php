<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ImportaQual_controller extends Sistema_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $this->usuario_view('ImportaQual_view',$data);
    }

    public function import()
    {
        $data = array();
        $data['breadcrumbs'] = array('Home' => '#');
        $this->usuario_view('ImportaQual_view', $data);
    }

// file upload functionality
    public function upload() 
    {

        function data_para_banco($data){
            $data_separada = explode("/", $data);
            $data_tratada = $data_separada[2] . "-0" . $data_separada[0] . "-" . $data_separada[1];
            return $data_tratada;
        }
        $data = array();
        $data['breadcrumbs'] = array('Home' => '#');
         // Load form validation library
         //$this->load->library('form_validation');
         $this->form_validation->set_rules('fileURL_qual', 'Upload File', 'callback_checkFileValidation_qual');
         if($this->form_validation->run() == false) 
         {            
            $this->usuario_view('ImportaQual_view', $data);
         } 
         else 
         {  
            // If file uploaded
            if(!empty($_FILES['fileURL_qual']['name'])): 

                // get file extension
                $extension = pathinfo($_FILES['fileURL_qual']['name'], PATHINFO_EXTENSION);
 
                if($extension == 'csv')
                {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } 
                elseif($extension == 'xlsx') 
                {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                } 
                else 
                {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                }
                // file path
                $spreadsheet = $reader->load($_FILES['fileURL_qual']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            
                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array('Filial', 'Venda', 'Vendedor', 'Email_do_Cliente', 'Telefone_do_Cliente', 'Nota_Recebida', 'Obs_do_Cliente', 'Obs_da_Aval');
                $makeArray = array('Filial' => 'Filial', 'Venda' => 'Venda', 'Vendedor' => 'Vendedor', 'Email_do_Cliente' => 'Email_do_Cliente', 'Telefone_do_Cliente' => 'Telefone_do_Cliente', 'Nota_Recebida' => 'Nota_Recebida', 'Obs_do_Cliente' => 'Obs_do_Cliente', 'Obs_da_Aval' => 'Obs_da_Aval');
                $SheetDataKey = array();
                foreach ($allDataInSheet as $dataInSheet) 
                {
                    foreach ($dataInSheet as $key => $value) 
                    {
                        if (in_array(trim($value), $createArray)) 
                        {   $value = preg_replace('/\s+/', '', $value);
                            $SheetDataKey[trim($value)] = $key;
                        } 
                    }
                }
                $dataDiff = array_diff_key($makeArray, $SheetDataKey);
                #print_r($SheetDataKey);
                #print_r($makeArray);
                #print_r($dataDiff); DEBUG
                if (empty($dataDiff)) 
                {
                    $flag = 1;
                }
                // match excel sheet column
                if ($flag == 1) 
                {
                    for ($i = 2; $i <= $arrayCount; $i++)
                    {
                        $addresses = array();
                        $filial = $SheetDataKey['Filial'];
                        $venda = $SheetDataKey['Venda'];
                        $vendedor = $SheetDataKey['Vendedor'];
                        $email = $SheetDataKey['Email_do_Cliente'];
                        $telefone = $SheetDataKey['Telefone_do_Cliente'];
                        $nota = $SheetDataKey['Nota_Recebida'];
                        $obs_cli = $SheetDataKey['Obs_do_Cliente'];
                        $obs_aval = $SheetDataKey['Obs_da_Aval'];

                
                        

                        $filial = filter_var(trim($allDataInSheet[$i][$filial]), FILTER_UNSAFE_RAW);
                        $venda = filter_var(trim($allDataInSheet[$i][$venda]), FILTER_UNSAFE_RAW);
                        $vendedor = filter_var(trim($allDataInSheet[$i][$vendedor]), FILTER_UNSAFE_RAW);
                        $email = filter_var(trim($allDataInSheet[$i][$email]), FILTER_UNSAFE_RAW);
                        $telefone = filter_var(trim($allDataInSheet[$i][$telefone]), FILTER_UNSAFE_RAW);
                        $nota = filter_var(trim($allDataInSheet[$i][$nota]), FILTER_UNSAFE_RAW);
                        $obs_cli = filter_var(trim($allDataInSheet[$i][$obs_cli]), FILTER_UNSAFE_RAW);
                        $obs_aval = filter_var(trim($allDataInSheet[$i][$obs_aval]), FILTER_UNSAFE_RAW);
                         
                        $fetchData[] = array('filial_notas_atendimentos' => $filial, 'venda_notas_atendimentos' => $venda, 'vendedor_notas_atendimentos' => $vendedor, 'email_notas_atendimentos' => $email, 'telefone_notas_atendimentos' => $telefone, 'nota_notas_atendimentos' => $nota, 'obs_cliente_notas_atendimentos' => $obs_cli, 'obs_aval_notas_atendimentos' => $obs_aval);
                    }
                    $dados['dataInfo'] = $fetchData;
                    $this->Analista_model->exclui_informacoes('notas_atendimentos');
                    $this->Analista_model->setBatchImport($fetchData);
                    $this->Analista_model->importData(7);
                }
                else 
                {
                    echo "Arquivo incorreto, não corresponde à coluna da planilha do Excel";
                }

                $this->usuario_view('Qual_view', $dados);

            endif;
        }

    }  
    
 
    // checkFileValidation_qual
    public function checkFileValidation_qual($string)
    {
      $file_mimes = array('text/x-comma-separated-values', 
        'text/comma-separated-values', 
        'application/octet-stream', 
        'application/vnd.ms-excel', 
        'application/x-csv', 
        'text/x-csv', 
        'text/csv', 
        'application/csv', 
        'application/excel', 
        'application/vnd.msexcel', 
        'text/plain', 
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
      );
      if(isset($_FILES['fileURL_qual']['name']))
      {
            $arr_file = explode('.', $_FILES['fileURL_qual']['name']);
            $extension = end($arr_file);
            if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['fileURL_qual']['type'], $file_mimes)){
                return true;
            }
            else
            {
                $this->form_validation->set_message('checkFileValidation_qual', 'Formato de arquivo incorreto! Apenas .xlsx, xls e csv');
                return false;
            }
        }
      else
        {
            $this->form_validation->set_message('checkFileValidation_qual', 'Por favor, selecione algum arquivo.');
            return false;
        }
    }
 }