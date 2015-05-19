<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Loja_Model', 'Loja_Model');
	}
	
	public function index()
	{
		$lojas = $this->Loja_Model->get();
		$dados = array();
		$dados['lojas'] = $lojas;
		$this->template->load('templates/shop', 'shop/home', $dados);
	}
	
	public function loja($cod)
	{
		$loja = $this->Loja_Model->get(array('cod'=>$cod));
		$dados = array('loja'=>$loja[0]);
		//var_dump($dados);
		$this->template->load('templates/loja', 'shop/loja', $dados);
		
	}
	
	public function cadastro_loja()
	{
		$this->load->view('shop/cadastro_loja');
	}
	
	public function cadastrar_loja()
	{
		$nome = $this->input->post('nome');
		$tipo = $this->input->post('tipo');
		$logo = $this->input->post('logo');
		
		$dados = array(
			'nome' => $nome,
			'tipo' => $tipo
		);
		
		$cod = $this->Loja_Model->post($dados);
		
		$dados['cod'] = $cod;
		$dados['logo'] = 'imagens/logos/'.$cod.'.jpg';
		$moveu = move_uploaded_file($_FILES['logo']['tmp_name'], $dados['logo']);		
		$this->Loja_Model->update($dados);
		redirect('painel');
	}
}
