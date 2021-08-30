<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard_controller extends Sistema_Controller {

    public function index()
    {
        $data['variavel'] = 'buscanobanco';
        $this->usuario_view('Dashboard_view', $data);
    }

}
