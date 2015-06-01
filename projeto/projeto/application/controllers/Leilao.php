<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leilao extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Leilao_Model', 'Leilao_Model');
		$this->load->model('Produto_Model', 'Produto_Model');
	}
/*
	public function index() {
		$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/listar_produtos',s$data);
	}

	public function editar_produto() {
		$this->template->load('templates/painel', 'painel/editar_produto');
	}

	public function modal_editar_produto($cod_prod) {
		$dados = array();
		$this->parser->parse('painel/modal_edit', $dados);
		//$this->template->load('templates/painel', 'painel/modal_edit');
	}*/
	
	public function listar_leilao() {		
		$query=$this->Leilao_Model->get_leilao();
		$data['query']= $query;
		$this->template->load('templates/painel', 'painel/listar_leilao', $data);
	}

	public function cadastrar_leilao() {
		$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/cadastrar_leilao', $data);
	}

	public function remover_leilao() {		
		$query=$this->Leilao_Model->get_leilao();
		$data['query']= $query;
		$this->template->load('templates/painel', 'painel/remover_leilao', $data);
	}

	public function salvar_dados(){
		$produto       = $this->input->post('produto');
		$precoinicial   = $this->input->post('precoinicial');
		$datainicial   = $this->input->post('datainicial');
		$datafinal     = $this->input->post('datafinal');
		
		$dados = array(
			'produto'      => $produto,
			'precoinicial' => $precoinicial,
			'datainicial'  => $datainicial, 
			'datafinal'    => $datafinal				
		);	

		$retorno = $this->Leilao_Model->post($dados);
		
		redirect("leilao/listar_leilao");
	}
	
	public function deletar_dados() {		
		if ($this->input->post('cod') > 0) { //verifica se enviou o formulário
			$cod = $this->input->post('cod');
			$condicoes = array('cod' => $cod);
			$this->Leilao_Model->delete($condicoes); //chama a função de excluir dados no BD
		}
		redirect("leilao/remover_leilao");
	}
	
	public function buscar_leilao() {
		$nome = $this->input->post('nome');
		$query=$this->Leilao_Model->get_busca_leilao($nome);
		$data['query']= $query;
		$data['nome'] = $nome;
		$this->template->load('templates/painel', 'painel/listar_leilao', $data);
		//redirect("desconto/remover_desconto");
	}
	
	public function buscar_leilao2() {
		$nome = $this->input->post('nome');
		$query=$this->Leilao_Model->get_busca_leilao($nome);
		$data['query']= $query;
		$data['nome'] = $nome;
		$this->template->load('templates/painel', 'painel/remover_leilao', $data);
		//redirect("desconto/remover_desconto");
	}
}

?>