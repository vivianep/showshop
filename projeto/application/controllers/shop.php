<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	public function index()
	{
		$this->template->load('templates/shop', 'shop/home');
	}
	
	public function loja()
	{
		$this->template->load('templates/loja', 'shop/loja');
	}
}
