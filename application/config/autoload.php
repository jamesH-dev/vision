<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array('session', 'email', 'database', 'upload', 'form_validation');


$autoload['drivers'] = array();


$autoload['helper'] = array('url', 'help', 'string', 'download', 'cookie', 'time', 'uri', 'help');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array(
                            'Login_model',
                            'usuario/menu/Geral_model',
                            'usuario/menu/Analista_model',
                            'usuario/menu/Coordenador_model',
                            'usuario/menu/Lista_loja_model',
                            'usuario/menu/Gerente_model',
                            'gerente/menu/Geral_gte_model',
                            'gerente/menu/Rankings_gte_model',
                            'gerente/menu/Premiacao_model',
                            'gerente/menu/Atendimento_model',



);
