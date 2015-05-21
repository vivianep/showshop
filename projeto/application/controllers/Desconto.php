<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desconto extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Desconto_Model', 'Desconto_Model');
		$this->load->model('Produto_Model', 'Produto_Model');
	}
/*
	public function index() {
		$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/listar_produtos',$data);
	}

	public function editar_produto() {
		$this->template->load('templates/painel', 'painel/editar_produto');
	}

	public function modal_editar_produto($cod_prod) {
		$dados = array();
		$this->parser->parse('painel/modal_edit', $dados);
		//$this->template->load('templates/painel', 'painel/modal_edit');
	}*/

	public function cadastrar_desconto() {
		$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/cadastrar_desconto', $data);
	}

	public function remover_desconto() {
		/*$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;*/
		$this->template->load('templates/painel', 'painel/remover_desconto');//, $data);
	}

	public function salvar_dados(){
		$produto       = $this->input->post('produto');
		$desconto      = $this->input->post('desconto');
		$datainicial   = $this->input->post('datainicial');
		$datafinal     = $this->input->post('datafinal');
		
		$dados = array(
			'produto'     => $produto,
			'desconto'    => $desconto,
			'datainicial' => $datainicial, 
			'datafinal'   => $datafinal				
		);	

		$retorno = $this->Desconto_Model->post($dados);
		
		redirect("desconto/cadastrar_desconto");
	}

	/*public function deletar_dados() {
		if ($this->input->post('cod') > 0) { //verifica se enviou o formulário
			$cod = $this->input->post('cod');
			$condicoes = array('cod' => $cod);
			$this->Produto_Model->delete($condicoes); //chama a função de excluir dados no BD
		}
		redirect("produto/remover_produto");
	}*/
}

?>