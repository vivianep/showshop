<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loja extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Loja_Model', 'Loja_Model');
	}
	
	public function buscar_loja() {
		$query=$this->Loja_Model->get();
		$data['query']=$query;
		$this->template->load('templates/buscarloja', 'homebuscar/buscar_loja', $data);
	}
	
	public function buscar() {
		$query=$this->Loja_Model->getBusca($this->input->get('termo'));
		$data['query']=$query;
		$this->template->load('templates/buscarloja', 'homebuscar/buscar_loja', $data);
	}
}	
?>