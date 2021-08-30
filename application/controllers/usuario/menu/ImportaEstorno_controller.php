<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ImportaEstorno_controller extends Sistema_Controller {

	function __construct() {
		parent::__construct();
	}

    public function index()
    {
        $data = array();
        $this->usuario_view('ImportaEstorno_view',$data);
    }

    public function import()
    {
        $data = array();
        $data['breadcrumbs'] = array('Home' => '#');
        $this->usuario_view('ImportaEstorno_view', $data);
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
         $this->form_validation->set_rules('fileURL_estorno', 'Upload File', 'callback_checkFileValidation_estorno');
         if($this->form_validation->run() == false) 
         {            
            $this->usuario_view('ImportaEstorno_view', $data);
         } 
         else 
         {  
            // If file uploaded
            if(!empty($_FILES['fileURL_estorno']['name'])): 

                // get file extension
                $extension = pathinfo($_FILES['fileURL_estorno']['name'], PATHINFO_EXTENSION);
 
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
                $spreadsheet = $reader->load($_FILES['fileURL_estorno']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            
                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array('Terminal', 'Comissao', 'Data_Servico', 'Data_Baixa', 'Valor', 'Apurado', 'Cliente', 'CPF', 'Servico', 'Grupo', 'Assinatura', 'Consultor', 'Loja', 'Referencia');
                $makeArray = array('Terminal' => 'Terminal', 'Comissao' => 'Comissao', 'Data_Servico' => 'Data_Servico', 'Data_Baixa' => 'Data_Baixa', 'Valor' => 'Valor', 'Apurado' => 'Apurado', 'Cliente' => 'Cliente', 'CPF' => 'CPF', 'Servico' => 'Servico', 'Grupo' => 'Grupo', 'Assinatura' => 'Assinatura', 'Consultor' => 'Consultor', 'Loja' => 'Loja', 'Referencia' => 'Referencia');
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
                        $terminal = $SheetDataKey['Terminal'];
                        $comissao = $SheetDataKey['Comissao'];
                        $data_servico = $SheetDataKey['Data_Servico'];
                        $data_baixa = $SheetDataKey['Data_Baixa'];
                        $valor = $SheetDataKey['Valor'];
                        $apurado = $SheetDataKey['Apurado'];
                        $cliente = $SheetDataKey['Cliente'];
                        $cpf = $SheetDataKey['CPF'];
                        $servico = $SheetDataKey['Servico'];
                        $grupo = $SheetDataKey['Grupo'];
                        $assinatura = $SheetDataKey['Assinatura'];
                        $consultor = $SheetDataKey['Consultor'];
                        $loja = $SheetDataKey['Loja'];
                        $referencia = $SheetDataKey['Referencia'];

                        $terminal = filter_var(trim($allDataInSheet[$i][$terminal]), FILTER_UNSAFE_RAW);
                        $comissao = filter_var(trim($allDataInSheet[$i][$comissao]), FILTER_UNSAFE_RAW);
                        $data_servico = filter_var(trim($allDataInSheet[$i][$data_servico]), FILTER_UNSAFE_RAW);
                        $data_baixa = filter_var(trim($allDataInSheet[$i][$data_baixa]), FILTER_UNSAFE_RAW);
                        $valor = filter_var(trim($allDataInSheet[$i][$valor]), FILTER_UNSAFE_RAW);
                        $apurado = filter_var(trim($allDataInSheet[$i][$apurado]), FILTER_UNSAFE_RAW);
                        $cliente = filter_var(trim($allDataInSheet[$i][$cliente]), FILTER_UNSAFE_RAW);
                        $cpf = filter_var(trim($allDataInSheet[$i][$cpf]), FILTER_UNSAFE_RAW);
                        $servico = filter_var(trim($allDataInSheet[$i][$servico]), FILTER_UNSAFE_RAW);
                        $grupo = filter_var(trim($allDataInSheet[$i][$grupo]), FILTER_UNSAFE_RAW);
                        $assinatura = filter_var(trim($allDataInSheet[$i][$assinatura]), FILTER_UNSAFE_RAW);
                        $consultor = filter_var(trim($allDataInSheet[$i][$consultor]), FILTER_UNSAFE_RAW);
                        $loja = filter_var(trim($allDataInSheet[$i][$loja]), FILTER_UNSAFE_RAW);
                        $referencia = filter_var(trim($allDataInSheet[$i][$referencia]), FILTER_UNSAFE_RAW);
 
                        $fetchData[] = array('terminal_estornos' => $terminal, 'comissao_estornos' => $comissao, 'data_servico_estornos' => data_para_banco($data_servico), 'data_baixa_estornos' => data_para_banco($data_baixa), 'valor_estornos' => $valor, 'apurado_estornos' => $apurado, 'cliente_estornos' => $cliente, 'cpf_estornos' => $cpf, 'servico_estornos' => $servico, 'grupo_estornos' => $grupo, 'assinatura_estornos' => $assinatura, 'consultor_estornos' => $consultor, 'loja_estornos' => $loja, 'referencia_estornos' => data_para_banco($referencia));
                    }

                    $dados['dataInfo'] = $fetchData;
                    //$this->Analista_model->exclui_informacoes('servicos');
                    $this->Analista_model->setBatchImport($fetchData);
                    $this->Analista_model->importData(6);
                }
                else 
                {
                    echo "Arquivo incorreto, não corresponde à coluna da planilha do Excel";
               	}

                $this->usuario_view('Estorno_view', $dados);

            endif;
        }

    }  
    
 
    // checkFileValidation_estorno
    public function checkFileValidation_estorno($string)
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
      if(isset($_FILES['fileURL_estorno']['name']))
      {
            $arr_file = explode('.', $_FILES['fileURL_estorno']['name']);
            $extension = end($arr_file);
            if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['fileURL_estorno']['type'], $file_mimes)){
                return true;
            }
            else
            {
                $this->form_validation->set_message('checkFileValidation_estorno', 'Formato de arquivo incorreto! Apenas .xlsx, xls e csv');
                return false;
            }
        }
      else
        {
            $this->form_validation->set_message('checkFileValidation_estorno', 'Por favor, selecione algum arquivo.');
            return false;
        }
    }
}

