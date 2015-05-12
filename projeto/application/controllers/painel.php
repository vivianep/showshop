<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
	public function index()
	{
		$this->template->load('templates/painel', 'painel/principal');
	}
	
	public function produtos()
	{
		$this->template->load('templates/painel', 'painel/produtos');
	}
	public function edit_product()
	{
		$this->template->load('templates/painel', 'painel/edit_product');
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
