<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_Model', 'Login_Model');
		$this->load->model('Produto_Model', 'Produto_Model');
		$this->load->model('Loja_Model', 'Loja_Model');
	}

	public function index() {
		$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/listar_produtos',$data);
	}

	public function atualizar_produto() {
		
		$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/atualizar_produto', $data);
	
	}

	public function editar_produto() {
		$this->template->load('templates/painel', 'painel/editar_produto');
	}

	

	public function modal_editar($cod) {
		var_dump($cod);
		$query=$this->Produto_Model->get_byCod($cod[0]);
		$data['query']=$query;
		$this->load->view('painel/modal_editar',$data);
		
		
	}

	public function cadastrar_produto() {
		$codloja = $this->session->userdata('codloja');
		$dados = array();
		$dados['loja'] = $this->Loja_Model->get(array('cod'=>$codloja))[0];
		$this->template->load('templates/painel', 'painel/cadastrar_produto',$dados);


	}

	public function remover_produto() {
		$query=$this->Produto_Model->get_produtos();
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/remover_produto', $data);
	}

	public function salvar_dados(){
		$codloja      = $this->input->post('codloja');
		$serial       = $this->input->post('serial');
		$nome         = $this->input->post('nome');
		$descr        = $this->input->post('descr');
		$preco        = $this->input->post('preco');
		$quantidade   = $this->input->post('quantidade');
		$tipo         = $this->input->post('tipo');
		$marca        = $this->input->post('marca');
		$tam          = $this->input->post('tam');
		
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

		

		$cod = $this->Produto_Model->post($dados);

		
		

		
			$img_produto    = $cod.'.jpg';
			move_uploaded_file($_FILES['img-produto']['tmp_name'], 'imagens/produtos/'.$img_produto);
		

		$itens = array(
			
			'img' => $img_produto,
			'serial' => '1111',
			'cod'  => $cod			
		);
		
		$this->Produto_Model->update($itens);

		$this->index($cod);
	}



	public function select_data(){
		 //verifica se enviou o formulário
		$cod = $this->input->post('cod');
		$condicoes = array('cod' => $cod);
		$data=$this->Produto_Model->get_byCod($condicoes);
		$this->template->load('templates/painel', 'painel/editar_produto',$data);
	}

	public function deletar_dados() {
		if ($this->input->post('cod') > 0) { //verifica se enviou o formulário
			$cod = $this->input->post('cod');
			$condicoes = array('cod' => $cod);
			$this->Produto_Model->delete($condicoes); //chama a função de excluir dados no BD
		}
		redirect("produto/remover_produto");
	}

	public function buscar_produto(){
		$query=$this->Produto_Model->getBusca($this->input->get('nome'));
		$data['query']=$query;
		$this->template->load('templates/painel', 'painel/atualizar_produto', $data);
	}
	
	public function buscar() {
		$query=$this->Produto_Model->getBusca($this->input->get('termo'));
		$data['query']=$query;
		$this->template->load('templates/buscarproduto', 'homebuscar/buscar_produto', $data);
	}
}

?>