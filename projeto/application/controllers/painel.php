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
}
