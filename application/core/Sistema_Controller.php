<?php
/*
CONTROLLERS DO SISTEMA QUE PRECISAM ESTAR AUTENTICADOS DEVEM DEIXAR DE
EXTENDER CI_Controller, EXTENDENDO ESTE CONTROLLER.
*/
class Sistema_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        if($this->session->usuario_email == ''){
            $this->session->set_flashdata('login', 'Erro ao autenticar, tente novamente.');
            redirect();
        } else {
            $this->session->set_flashdata('login', 'Você está logado, para sair <a href="'.base_url('logout').'">clique aqui.</a>');
            return true;
        }

    }
    
    public function usuario_view($view, $data)
    {   
        #FMB GERAL
        $info = $this->Geral_model->lista_fmb();
        $total = $this->Geral_model->quantidade_g2();
        $dados = [];

        foreach ($info as $linha)
        {
            $dados['rotulo'][] = "R$ ".number_format($linha->valor_vendas_servicos,2,',','.');
            $dados['valor'][] = $linha->CONTAGEM;
        }

        $dados['info_grafico'] = json_encode($dados);


        $this->load->view('usuario/includes/Header_view', $data);
        $this->load->view('usuario/'.segment(3).'/'.$view, $data);
        $this->load->view('usuario/includes/Footer_view',$dados);

    }

    public function gerente_view($view, $data)
    {
        
        $this->load->view('gerente/includes/Header_view', $data);
        $this->load->view('gerente/'.segment(3).'/'.$view, $data);
        $this->load->view('gerente/includes/Footer_view');

    }

    public function coordenador_view($view, $data)
    {
        
        $this->load->view('coordenador/includes/Header_view', $data);
        $this->load->view('coordenador/'.segment(3).'/'.$view, $data);
        $this->load->view('coordenador/includes/Footer_view');

    }

}

?>