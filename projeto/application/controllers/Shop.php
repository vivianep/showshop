<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Loja_Model', 'Loja_Model');
		$this->load->model('LoginLoja_Model', 'LoginLoja_Model');
		//$this->load->library('session');
		$this->load->model('Login_model', 'Login_Model');
		$this->load->model('VitrineLoja_Model', 'VitrineLoja_Model'); 
	}
	
	public function index()
	{
		$lojas = $this->Loja_Model->get(array('logo !=' => ''));
		$dados = array();
		$dados['lojas'] = $lojas;
		$this->template->load('templates/shop', 'shop/home', $dados);
	}
	
	public function log_out()
	{
		$this->session->unset_userdata('usuario');
		redirect("shop");
	}

	public function loja($cod, $categoria=NULL)
	{
		$loja = $this->Loja_Model->get(array('cod'=>$cod));
		$categorias = $this->Loja_Model->get_categorias($cod);
		$vitrines = $this->VitrineLoja_Model->get(array('codloja'=>$cod))[0];
		if($vitrines){
			$banners = array();
			if($vitrines->vitrine1banner)
				$banners[] = $vitrines->vitrine1banner;
			if($vitrines->vitrine2banner)
				$banners[] = $vitrines->vitrine2banner;
			if($vitrines->vitrine3banner)
				$banners[] = $vitrines->vitrine3banner;
			if($vitrines->vitrine4banner)
				$banners[] = $vitrines->vitrine4banner;
		}
		
		$dados = array();
		$dados['loja'] = $loja[0];
		$dados['categorias'] = $categorias;
		$dados['banners'] = $banners;
		$dados['produtos'] = array();
		

		
		if($categoria){
			$cont = 6;
			for($i = 0; $i < 40; $i += 6){
				//$dados['produtos'][] = array();
				$row = array();
				for($j = $i; ($j < $cont) && ($j < 40); $j++){
				 	$row[] = $j;
				}
				$dados['produtos'][] = $row;
				$cont+=6;
			}			
		}
		else {
			$cont = 6;
			for($i = 0; $i < 40; $i += 6){
				//$dados['produtos'][] = array();
				$row = array();
				for($j = $i; ($j < $cont) && ($j < 40); $j++){
				 	$row[] = $j;
				}
				$dados['produtos'][] = $row;
				$cont+=6;
			}
		}

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
		$nivelacesso = 2;

		$dt = new DateTime();
		$dadosLoja = array(
			'nome' => $nome,
			'tipo' => $tipo,
			'email' => $email,
			'registradoEm' => $dt->format('Y-m-d H:i:s'),
		);

		$codloja = $this->Loja_Model->post($dadosLoja);
		
//		$dados['cod'] = $cod;
//		$dados['logo'] = 'imagens/logos/'.$cod.'.jpg';
//		$moveu = move_uploaded_file($_FILES['logo']['tmp_name'], $dados['logo']);		
//		$this->Loja_Model->update($dados);
	
		$this->session->set_userdata('codloja', $codloja);
		$this->session->set_userdata('usuario', $nomeusuario);
	
		$dadosusuario = array(
			'usuario' => $usuario,
			'nome' => $nomeusuario,
			'senha' => $senha,
			'email' => $email,
			'codloja' => $codloja,
			'nivelacesso' => $nivelacesso,
		);
		
		$result = $this->Login_Model->post($dadosusuario);
		
		redirect('painel');
	}
}
