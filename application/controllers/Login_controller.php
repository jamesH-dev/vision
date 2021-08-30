<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_controller extends CI_Controller {


    public function index()
    {   
        if ($this->session->userdata('nome_usuario')==null)
        {
            $this->load->view('Login_view');
        }
        else
        {
            if ($this->session->userdata('nivel_usuario') == 1)
            {
                redirect('usuario/menu'); 
            }

            elseif ($this->session->userdata('nivel_usuario') == 2)
            {
                redirect('gerente/menu'); 
            }
            
        }
    }

	public function login()
	{
		$dados = $this->input->post();
		$this->session->set_userdata($this->Login_model->login($dados));
        if ($this->session->userdata('nivel_usuario') == 1)
        {
            redirect('usuario/menu'); 
        }

        elseif ($this->session->userdata('nivel_usuario') == 2)
        {
            redirect('gerente/menu'); 
        }
	}

    public function recovery()
    {
        
    }

    public function logout()
    {
        session_destroy();
        redirect();
    }

}
