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
	
	public function configuracoes(){
		$codloja = $this->session->userdata('codloja');
		$dados = array();
		$dados['loja'] = $this->Loja_Model->get(array('cod'=>$codloja))[0];
		if(!$dados['loja']->logo)
			$dados['loja']->logo = 'default.jpg';
		$this->template->load('templates/painel', 'painel/configuracoes_loja', $dados);
	}
	
	public function usuarios(){
		$codloja = $this->session->userdata('codloja');
		$condicao = array(
			'codloja'     => $codloja,
			'nivelacesso' => 3
		);
		$dados = array();
		$dados['usuarios'] = $this->Login_Model->get($condicao);
		$this->template->load('templates/painel', 'painel/usuarios_loja', $dados);
	}
	
	public function excluir_usuario($usuario){
		$codloja = $this->session->userdata('codloja');
		$condicao = array(
			'codloja'     => $codloja,
			'nivelacesso' => 3,
			'usuario'     => $usuario
		);
		
		$this->Login_Model->delete($condicao);
		redirect('loja/usuarios');
	}
	
	public function cadastrar_usuario($dados){
		$dados = array(
			'codloja'     => $this->session->userdata('codloja'),
			'nivelacesso' => 3,
			'usuario'     => $this->input->post('usuario'),
			'email  '     => $this->input->post('email'),
			'nome'        => $this->input->post('nome'),
			'senha'       => '123'
		);
		$this->Login_Model->post($dados);
		redirect('loja/usuarios');
	}
	
	public function salvar_dados(){
		$nome    = $this->input->post('nome');
		$tipo    = $this->input->post('tipo');
		$codloja = $this->session->userdata('codloja');
		
		if($_FILES['logo']){
			$logo    = $codloja.'.jpg';
			move_uploaded_file($_FILES['logo']['tmp_name'], 'imagens/logos/'.$logo);
		}
		
		$dados = array(
			'nome' => $nome,
			'tipo' => $tipo,
			'logo' => $logo,
			'cod'  => $codloja			
		);
			
		$this->Loja_Model->update($dados);
		redirect('loja/configuracoes');
	}
}	
?>