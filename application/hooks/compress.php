<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Não faz compressão da página inicial ou página de /u/
function compresss()
{
	ini_set("pcre.recursion_limit", "16777");
	$CI =& get_instance();

	$buffer = $CI->output->get_output();

	$re = '%(?>[^\S ]\s*|\s{2,}) (?=[^<]*+(?:<(?!/?(?:textarea|pre|script)\b)[^<]*+)*+(?:<(?>textarea|pre|script)\b| \z))%Six';

	$new_buffer = preg_replace($re, " ", $buffer);

	// We are going to check if processing has working
	if ($new_buffer === null)
	{
		$new_buffer = $buffer;
	}

	$CI->output->set_output($new_buffer);
	$CI->output->_display();
}



//Não faz compressão da página inicial ou página de /u/
function compress()
{
	ini_set("pcre.recursion_limit", "16777");
	$CI =& get_instance();
	$CI->output->_display();

}
