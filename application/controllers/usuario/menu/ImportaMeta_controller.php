<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ImportaMeta_controller extends Sistema_Controller {

	function __construct() {
		parent::__construct();
	}

    public function index()
    {
        $data = array();
        $this->usuario_view('ImportaMeta_view',$data);
    }

    public function import()
    {
        $data = array();
        $data['breadcrumbs'] = array('Home' => '#');
        $this->usuario_view('ImportaMeta_view', $data);
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
         $this->form_validation->set_rules('fileURL_meta', 'Upload File', 'callback_checkFileValidation_meta');
         if($this->form_validation->run() == false) 
         {            
            $this->usuario_view('ImportaMeta_view', $data);
         } 
         else 
         {  
            // If file uploaded
            if(!empty($_FILES['fileURL_meta']['name'])): 

                // get file extension
                $extension = pathinfo($_FILES['fileURL_meta']['name'], PATHINFO_EXTENSION);
 
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
                $spreadsheet = $reader->load($_FILES['fileURL_meta']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            
                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array('Nome', 'Funcao', 'Servico', 'Produto', 'Acessorio', 'FPD', 'Mes');
                $makeArray = array('Nome' => 'Nome', 'Funcao' => 'Funcao', 'Servico' => 'Servico', 'Produto' => 'Produto', 'Acessorio' => 'Acessorio', 'FPD' => 'FPD', 'Mes' => 'Mes');
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
                #print_r($dataDiff);
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
                        $nome = $SheetDataKey['Nome'];
                        $funcao = $SheetDataKey['Funcao'];
                        $servico = $SheetDataKey['Servico'];
                        $produto = $SheetDataKey['Produto'];
                        $acessorio = $SheetDataKey['Acessorio'];
                        $fpd = $SheetDataKey['FPD'];
                        $mes = $SheetDataKey['Mes'];
                        

                        $nome = filter_var(trim($allDataInSheet[$i][$nome]), FILTER_UNSAFE_RAW);
                        $funcao = filter_var(trim($allDataInSheet[$i][$funcao]), FILTER_UNSAFE_RAW);
                        $servico = filter_var(trim($allDataInSheet[$i][$servico]), FILTER_UNSAFE_RAW);
                        $produto = filter_var(trim($allDataInSheet[$i][$produto]), FILTER_UNSAFE_RAW);
                        $acessorio = filter_var(trim($allDataInSheet[$i][$acessorio]), FILTER_UNSAFE_RAW);
                        $fpd = filter_var(trim($allDataInSheet[$i][$fpd]), FILTER_UNSAFE_RAW);
                        $mes = filter_var(trim($allDataInSheet[$i][$mes]), FILTER_UNSAFE_RAW);
                        
 
                        $fetchData[] = array('nome_meta' => $nome, 'funcao_meta' => $funcao, 'servico_meta' => $servico, 'produto_meta' => $produto, 'acessorio_meta' => $acessorio, 'fpd_meta' => $fpd, 'mes_meta' => data_para_banco($mes));
                    }

                    $dados['dataInfo'] = $fetchData;
                    $this->Analista_model->exclui_informacoes('meta');
                    $this->Analista_model->setBatchImport($fetchData);
                    $this->Analista_model->importData(3);
                }
                else 
                {
                    echo "Arquivo incorreto, não corresponde à coluna da planilha do Excel";
               	}

                $this->usuario_view('Meta_view', $dados);

            endif;
        }

    }  
    
 
    // checkFileValidation_meta
    public function checkFileValidation_meta($string)
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
      if(isset($_FILES['fileURL_meta']['name']))
      {
            $arr_file = explode('.', $_FILES['fileURL_meta']['name']);
            $extension = end($arr_file);
            if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['fileURL_meta']['type'], $file_mimes)){
                return true;
            }
            else
            {
                $this->form_validation->set_message('checkFileValidation_meta', 'Formato de arquivo incorreto! Apenas .xlsx, xls e csv');
                return false;
            }
        }
      else
        {
            $this->form_validation->set_message('checkFileValidation_meta', 'Por favor, selecione algum arquivo.');
            return false;
        }
    }
}

