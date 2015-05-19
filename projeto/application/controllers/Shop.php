<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Loja_Model', 'Loja_Model');
		$this->load->model('MasterId_Model', 'MasterId_Model');
		$this->load->model('LoginLoja_Model', 'LoginLoja_Model');
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
		$nomeusuario = $this->input->post('nomeusuario');
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		$email = $this->input->post('email');
		
		$dados = array(
			'nome' => $nome,
			'tipo' => $tipo
		);
		
		$codloja = $this->Loja_Model->post($dados);
		$masterid = $this->MasterId_Model->post();
		
//		$dados['cod'] = $cod;
//		$dados['logo'] = 'imagens/logos/'.$cod.'.jpg';
//		$moveu = move_uploaded_file($_FILES['logo']['tmp_name'], $dados['logo']);		
//		$this->Loja_Model->update($dados);
		
		
		$this->session->set_userdata('codloja', $cod);
		$this->session->set_userdata('masterid', $masterid);
		
		$dadosusuario = array(
			'usuario' => $usuario,
			'nome' => $nomeusuario,
			'senha' => $senha,
			'email' => $email,
			'codloja' => $codloja,
			'mastercode' => $masterid	
		);
		
		$result = $this->LoginLoja_Model->post($dadosusuario);
		
		redirect('painel');
	}
}
