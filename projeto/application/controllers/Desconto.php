<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desconto extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Desconto_Model', 'Desconto_Model');
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
		$this->template->load('templates/painel', 'painel/cadastrar_desconto');
	}

	public function remover_desconto() {
		/*$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;*/
		$this->template->load('templates/painel', 'painel/remover_desconto');//, $data);
	}

	/*public function salvar_dados(){
		$codloja      = $this->input->post('codloja');
		$serial  = $this->input->post('serial');
		$nome   = $this->input->post('nome');
		$descr      = $this->input->post('descr');
		$preco      = $this->input->post('preco');
		$quantidade  = $this->input->post('quantidade');
		$tipo   = $this->input->post('tipo');
		$marca      = $this->input->post('marca');
		$tam      = $this->input->post('tam');
		
		$dados = array(
			'codloja' => $codloja,
			'serial' => $serial,
			'nome' => $nome, 
			'descr' => $descr,
			'preco' => $preco,
			'quantidade' => $quantidade,
			'tipo' => $tipo,
			'marca' => $marca,
			'tam' => $tam,
				
		);	

		$retorno = $this->Produto_Model->post($dados);
		
		redirect("produto/index");
	}

	public function deletar_dados() {
		if ($this->input->post('cod') > 0) { //verifica se enviou o formulário
			$cod = $this->input->post('cod');
			$condicoes = array('cod' => $cod);
			$this->Produto_Model->delete($condicoes); //chama a função de excluir dados no BD
		}
		redirect("produto/remover_produto");
	}*/
}

?>