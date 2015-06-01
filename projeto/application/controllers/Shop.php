<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Loja_Model', 'Loja_Model');
		$this->load->model('Login_Model', 'Login_Model');
	}
	
	public function index()
	{
		$lojas = $this->Loja_Model->get(array('logo !=' => ''));
		$dados = array();
		$dados['lojas'] = $lojas;
		$this->template->load('templates/shop', 'shop/home', $dados);
	}
	
	public function loja($cod)
	{
		$loja = $this->Loja_Model->get(array('cod'=>$cod));
		$categorias = $this->Loja_Model->get_categorias($cod);
		$dados = array();
		$dados['loja'] = $loja[0];
		$dados['categorias'] = $categorias;
		$this->template->load('templates/loja', 'shop/loja', $dados);		
	}
	
	public function cadastro_loja()
	{
		$this->load->view('shop/cadastro_loja');
	}
	
	public function cadastrar_loja()
	{
		$nome        = $this->input->post('nome');
		$tipo        = $this->input->post('tipo');
		$nomeusuario = $this->input->post('nomeusuario');
		$usuario     = $this->input->post('usuario');
		$senha       = $this->input->post('senha');
		$email       = $this->input->post('email');
		
		$dados = array(
			'nome' => $nome,
			'tipo' => $tipo
		);
		
		$codloja = $this->Loja_Model->post($dados);
		
//		$dados['cod'] = $cod;
//		$dados['logo'] = 'imagens/logos/'.$cod.'.jpg';
//		$moveu = move_uploaded_file($_FILES['logo']['tmp_name'], $dados['logo']);		
//		$this->Loja_Model->update($dados);
		
		$dadosusuario = array(
			'usuario'    => $usuario,
			'nome'       => $nomeusuario,
			'senha'      => $senha,
			'email'      => $email,
			'codloja'    => $codloja,
			'nivelacesso'=> 2	
		);
		
		$result = $this->Login_Model->post($dadosusuario);
		
		$this->session->set_userdata('codloja', $codloja);
		$this->session->set_userdata('usuario', $usuario);
		$this->session->set_userdata('nivelacesso', 2);
		
		redirect('painel');
	}
}
