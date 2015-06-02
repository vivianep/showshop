<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Loja_Model', 'Loja_Model');
	}
	
	public function index()
	{
		$this->template->load('templates/painel', 'painel/principal');
	}
	
	public function modal_edit($cod_prod)
	{
		$dados = array();
		$this->parser->parse('painel/modal_edit', $dados);
		//$this->template->load('templates/painel', 'painel/modal_edit');
	}

	public function create_product()
	{
		$this->template->load('templates/painel', 'painel/create_product');
	}

	public function remove_product()
	{
		$this->template->load('templates/painel', 'painel/remove_product');
	}
}