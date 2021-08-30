<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ImportaProdDef_controller extends Sistema_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $this->usuario_view('ImportaProdDef_view',$data);
    }

    public function import()
    {
        $data = array();
        $data['breadcrumbs'] = array('Home' => '#');
        $this->usuario_view('ImportaProdDef_view', $data);
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
         $this->form_validation->set_rules('fileURL_prod_def', 'Upload File', 'callback_checkFileValidation_prod_def');
         if($this->form_validation->run() == false) 
         {            
            $this->usuario_view('ImportaProdDef_view', $data);
         } 
         else 
         {  
            // If file uploaded
            if(!empty($_FILES['fileURL_prod_def']['name'])): 

                // get file extension
                $extension = pathinfo($_FILES['fileURL_prod_def']['name'], PATHINFO_EXTENSION);
 
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
                $spreadsheet = $reader->load($_FILES['fileURL_prod_def']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            
                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array('Filial', 'Produto', 'Modelo', 'Cliente', 'Vendedor', 'Data', 'Valor');
                $makeArray = array('Filial' => 'Filial', 'Produto' => 'Produto', 'Modelo' => 'Modelo', 'Cliente' => 'Cliente', 'Vendedor' => 'Vendedor', 'Data' => 'Data', 'Valor' => 'Valor');
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
                        $produto = $SheetDataKey['Produto'];
                        $modelo = $SheetDataKey['Modelo'];
                        $cliente = $SheetDataKey['Cliente'];
                        $vendedor = $SheetDataKey['Vendedor'];
                        $data = $SheetDataKey['Data'];
                        $valor = $SheetDataKey['Valor'];
                
                        

                        $filial = filter_var(trim($allDataInSheet[$i][$filial]), FILTER_UNSAFE_RAW);
                        $produto = filter_var(trim($allDataInSheet[$i][$produto]), FILTER_UNSAFE_RAW);
                        $modelo = filter_var(trim($allDataInSheet[$i][$modelo]), FILTER_UNSAFE_RAW);
                        $cliente = filter_var(trim($allDataInSheet[$i][$cliente]), FILTER_UNSAFE_RAW);
                        $vendedor = filter_var(trim($allDataInSheet[$i][$vendedor]), FILTER_UNSAFE_RAW);
                        $data = filter_var(trim($allDataInSheet[$i][$data]), FILTER_UNSAFE_RAW);
                        $valor = filter_var(trim($allDataInSheet[$i][$valor]), FILTER_UNSAFE_RAW);
                         
                        $fetchData[] = array('filial_vendas_produtos' => $filial, 'produto_vendas_produtos' => $produto, 'modelo_vendas_produtos' => $modelo, 'cliente_vendas_produtos' => $cliente, 'vendedor_vendas_produtos' => $vendedor, 'data_vendas_produtos' => data_para_banco($data), 'valor_vendas_produtos' => $valor);
                    }

                    $dados['dataInfo'] = $fetchData;
                    //$this->Analista_model->exclui_informacoes('produtos');
                    $this->Analista_model->setBatchImport($fetchData);
                    $this->Analista_model->importData(5);
                }
                else 
                {
                    echo "Arquivo incorreto, não corresponde à coluna da planilha do Excel";
                }

                $this->usuario_view('ProdDef_view', $dados);

            endif;
        }

    }  
    
 
    // checkFileValidation_prod_def
    public function checkFileValidation_prod_def($string)
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
      if(isset($_FILES['fileURL_prod_def']['name']))
      {
            $arr_file = explode('.', $_FILES['fileURL_prod_def']['name']);
            $extension = end($arr_file);
            if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['fileURL_prod_def']['type'], $file_mimes)){
                return true;
            }
            else
            {
                $this->form_validation->set_message('checkFileValidation_prod_def', 'Formato de arquivo incorreto! Apenas .xlsx, xls e csv');
                return false;
            }
        }
      else
        {
            $this->form_validation->set_message('checkFileValidation_prod_def', 'Por favor, selecione algum arquivo.');
            return false;
        }
    }
 }