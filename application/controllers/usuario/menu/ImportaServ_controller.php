<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ImportaServ_controller extends Sistema_Controller {

	function __construct() {
		parent::__construct();
	}

    public function index()
    {
        $data = array();
        $this->usuario_view('ImportaServ_view',$data);
    }

    public function import()
    {
        $data = array();
        $data['breadcrumbs'] = array('Home' => '#');
        $this->usuario_view('ImportaServ_view', $data);
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
         $this->form_validation->set_rules('fileURL_serv', 'Upload File', 'callback_checkFileValidation_serv');
         if($this->form_validation->run() == false) 
         {            
            $this->usuario_view('ImportaServ_view', $data);
         } 
         else 
         {  
            // If file uploaded
            if(!empty($_FILES['fileURL_serv']['name'])): 

                // get file extension
                $extension = pathinfo($_FILES['fileURL_serv']['name'], PATHINFO_EXTENSION);
 
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
                $spreadsheet = $reader->load($_FILES['fileURL_serv']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            
                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array('Filial', 'Data', 'Vendedor', 'Cliente', 'CPF', 'Servico', 'Plano', 'Acesso', 'Email', 'Next', 'GED', 'Valor', 'Remuneracao', 'Grupo', 'Coordenador');
                $makeArray = array('Filial' => 'Filial', 'Data' => 'Data', 'Vendedor' => 'Vendedor', 'Cliente' => 'Cliente', 'CPF' => 'CPF', 'Servico' => 'Servico', 'Plano' => 'Plano', 'Acesso' => 'Acesso', 'Email' => 'Email', 'Next' => 'Next', 'GED' => 'GED', 'Valor' => 'Valor', 'Remuneracao' => 'Remuneracao', 'Grupo' => 'Grupo', 'Coordenador' => 'Coordenador');
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
                        $data = $SheetDataKey['Data'];
                        $vendedor = $SheetDataKey['Vendedor'];
                        $cliente = $SheetDataKey['Cliente'];
                        $cpf = $SheetDataKey['CPF'];
                        $servico = $SheetDataKey['Servico'];
                        $plano = $SheetDataKey['Plano'];
                        $acesso = $SheetDataKey['Acesso'];
                        $email = $SheetDataKey['Email'];
                        $next = $SheetDataKey['Next'];
                        $ged = $SheetDataKey['GED'];
                        $valor = $SheetDataKey['Valor'];
                        $remuneracao = $SheetDataKey['Remuneracao'];
                        $grupo = $SheetDataKey['Grupo'];
                        $coordenador = $SheetDataKey['Coordenador'];

                        $filial = filter_var(trim($allDataInSheet[$i][$filial]), FILTER_UNSAFE_RAW);
                        $data = filter_var(trim($allDataInSheet[$i][$data]), FILTER_UNSAFE_RAW);
                        $vendedor = filter_var(trim($allDataInSheet[$i][$vendedor]), FILTER_UNSAFE_RAW);
                        $cliente = filter_var(trim($allDataInSheet[$i][$cliente]), FILTER_UNSAFE_RAW);
                        $cpf = filter_var(trim($allDataInSheet[$i][$cpf]), FILTER_UNSAFE_RAW);
                        $servico = filter_var(trim($allDataInSheet[$i][$servico]), FILTER_UNSAFE_RAW);
                        $plano = filter_var(trim($allDataInSheet[$i][$plano]), FILTER_UNSAFE_RAW);
                        $acesso = filter_var(trim($allDataInSheet[$i][$acesso]), FILTER_UNSAFE_RAW);
                        $email = filter_var(trim($allDataInSheet[$i][$email]), FILTER_UNSAFE_RAW);
                        $next = filter_var(trim($allDataInSheet[$i][$next]), FILTER_UNSAFE_RAW);
                        $ged = filter_var(trim($allDataInSheet[$i][$ged]), FILTER_UNSAFE_RAW);
                        $valor = filter_var(trim($allDataInSheet[$i][$valor]), FILTER_UNSAFE_RAW);
                        $remuneracao = filter_var(trim($allDataInSheet[$i][$remuneracao]), FILTER_UNSAFE_RAW);
                        $grupo = filter_var(trim($allDataInSheet[$i][$grupo]), FILTER_UNSAFE_RAW);
                        $coordenador = filter_var(trim($allDataInSheet[$i][$coordenador]), FILTER_UNSAFE_RAW);
 
                        $fetchData[] = array('filial_vendas_servicos' => $filial, 'data_vendas_servicos' => data_para_banco($data), 'vendedor_vendas_servicos' => $vendedor, 'cliente_vendas_servicos' => $cliente, 'cpf_vendas_servicos' => $cpf, 'servico_vendas_servicos' => $servico, 'plano_vendas_servicos' => $plano, 'acesso_vendas_servicos' => $acesso, 'email_vendas_servicos' => $email, 'next_vendas_servicos' => $next, 'ged_vendas_servicos' => $ged, 'valor_vendas_servicos' => $valor, 'remuneracao_vendas_servicos' => $remuneracao, 'grupo_vendas_servicos' => $grupo, 'coordenador_vendas_servicos' => $coordenador);
                    }

                    $dados['dataInfo'] = $fetchData;
                    $this->Analista_model->exclui_informacoes('servicos');
                    $this->Analista_model->setBatchImport($fetchData);
                    $this->Analista_model->importData(1);
                }
                else 
                {
                    echo "Arquivo incorreto, não corresponde à coluna da planilha do Excel";
               	}

                $this->usuario_view('Serv_view', $dados);

            endif;
        }

    }  
    
 
    // checkFileValidation_serv
    public function checkFileValidation_serv($string)
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
      if(isset($_FILES['fileURL_serv']['name']))
      {
            $arr_file = explode('.', $_FILES['fileURL_serv']['name']);
            $extension = end($arr_file);
            if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['fileURL_serv']['type'], $file_mimes)){
                return true;
            }
            else
            {
                $this->form_validation->set_message('checkFileValidation_serv', 'Formato de arquivo incorreto! Apenas .xlsx, xls e csv');
                return false;
            }
        }
      else
        {
            $this->form_validation->set_message('checkFileValidation_serv', 'Por favor, selecione algum arquivo.');
            return false;
        }
    }
}

