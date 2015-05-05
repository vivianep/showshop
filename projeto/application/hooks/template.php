<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template {
	public function init() {
		$CI		= &get_instance();
		
		$output = $CI->output->get_output();      
        if (isset($CI->layout)) {
			
			if ($CI->layout) {
				
				if (!preg_match('/(.+).php$/', $CI->layout)) {
					$CI->layout .= '.php';
				}
				
				$template = APPPATH . 'templates/'.$CI->layout;
				
				if (file_exists($template)){
					$layout = $CI->load->file($template, TRUE);
				} else {
					die('Template inválida.');
				}
				
				$html	= str_replace("{CONTEUDO}", $output, $layout);
			} else {
				$html = $output;
			}
		} else {
			$html = $output;
		}
		
		$CI->output->_display($html);
	}
}