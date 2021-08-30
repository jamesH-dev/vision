<?php
defined('BASEPATH') OR exit('No direct script access allowed');


#BÁSICO
$route['translate_uri_dashes']                              = FALSE;
$route['404_override']                                      = 'My404';

#AUTENTICAÇÃO
$route['default_controller']                                = 'Login_controller/index';
$route['login']['post']                                     = 'Login_controller/login';
$route['logout']['get']                                     = 'Login_controller/logout';
$route['recovery']['get']                                   = 'Login_controller/recovery';

#USUARIO URL															CONTROLLER
$route['usuario/menu']['get']		                        = 'usuario/menu/Menu_controller/index';
$route['usuario/menu/visao-geral']							= 'usuario/menu/Geral_controller/index';
$route['usuario/menu/lojas']								= 'usuario/menu/Loja_controller/index';
$route['usuario/menu/analise-qualitativa']					= 'usuario/menu/Qualitativa_controller/index';
$route['usuario/menu/premiacao']							= 'usuario/menu/Premiacao_controller/index';
$route['usuario/menu/analista-diario']						= 'usuario/menu/AnalistaDiario_controller/index';
$route['usuario/menu/analista/importar-servico'] 			= 'usuario/menu/ImportaServ_controller/index';
$route['usuario/menu/analista/importar-servico/arquivo'] 	= 'usuario/menu/ImportaServ_controller/upload';
$route['usuario/menu/analista/importar-estornos'] 			= 'usuario/menu/ImportaEstorno_controller/index';
$route['usuario/menu/analista/importar-estornos/arquivo'] 	= 'usuario/menu/ImportaEstorno_controller/upload';
$route['usuario/menu/analista/importar-produto'] 			= 'usuario/menu/ImportaProd_controller/index';
$route['usuario/menu/analista/importar-produto/arquivo'] 	= 'usuario/menu/ImportaProd_controller/upload';
$route['usuario/menu/analista/importar-qualidade'] 			= 'usuario/menu/ImportaQual_controller/index';
$route['usuario/menu/analista/importar-qualidade/arquivo'] 	= 'usuario/menu/ImportaQual_controller/upload';
$route['usuario/menu/analista/importar-meta'] 				= 'usuario/menu/ImportaMeta_controller/index';
$route['usuario/menu/analista/importar-meta/arquivo'] 		= 'usuario/menu/ImportaMeta_controller/upload';
$route['usuario/menu/analista-mensal']						= 'usuario/menu/AnalistaMensal_controller/index';
$route['usuario/menu/rankings']								= 'usuario/menu/Rankings_controller/index';
$route['usuario/menu/premiacao/coordenador']				= 'usuario/menu/Coordenador_controller/index';
$route['usuario/menu/premiacao/lista-lojas']				= 'usuario/menu/Lista_loja_controller/index';
$route['usuario/menu/premiacao/loja']						= 'usuario/menu/Gerente_controller/index';


$route['usuario/menu/analista/importar-produto-definitivo'] 	
= 'usuario/menu/ImportaProdDef_controller/index';

$route['usuario/menu/analista/importar-produto-definitivo/arquivo'] 
= 'usuario/menu/ImportaProdDef_controller/upload';

$route['usuario/menu/analista/importar-servico-definitivo'] 	
= 'usuario/menu/ImportaServDef_controller/index';

$route['usuario/menu/analista/importar-servico-definitivo/arquivo'] 
= 'usuario/menu/ImportaServDef_controller/upload';


#GERENTE URL
$route['gerente/menu']['get']		                    = 'gerente/menu/Menu_controller/index';
$route['gerente/menu/visao-geral']						= 'gerente/menu/Geral_controller/index';
$route['gerente/menu/rankings']							= 'gerente/menu/Rankings_controller/index';
$route['gerente/menu/premiacao/minha-premiacao']		= 'gerente/menu/Premiacao_controller/index';
$route['gerente/menu/premiacao/cn']						= 'gerente/menu/Consultor_controller/index';
$route['gerente/menu/atendimento']						= 'gerente/menu/Atendimento_controller/index';
