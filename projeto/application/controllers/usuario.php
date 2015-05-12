<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout= "";
		$this->load->model('Clientess_Model', 'Clientess_Model');
		$this->load->model('Login_Model', 'Login_Model');
	}


	public function salvar_dados(){
		$id        = $this->input->post('id');
		$nome      = $this->input->post('nome');
		$endprinc  = $this->input->post('endprinc');
		$endcomp   = $this->input->post('endcomp');
		$cep       = $this->input->post('cep');
		
		$dados = array(
			'id' => $id,
			'nome' => $nome,
			'endprinc' => $endprinc, 
			'endcomp' => $endcomp,
			'cep' => $cep
		);
		
		$retorno = $this->Clientess_Model->update($dados);

		if($retorno){
			$this->session->set_flashdata('flashSuccess', 'Dados gravados com sucesso.');
		} else {
			$this->session->set_flashdata('flashError','Ocorreu um erro ao gravar os dados.');
		}
		$this->session->set_flashdata('secaoatual', '?cliente?');
		redirect('I dont know');		
	}

	public function alterar_conta(){
		$usuario     = $this->input->post('usuario');
		$senha       = $this->input->post('senha');
		$novasenha   = $this->input->post('novasenha');
		$repetesenha = $this->input->post('repetesenha');
		$senhaCrypt  = $this->encrypt->sha1($senha);

		$condicao = array(
			'usuario' => $usuario
		);

		$usuario = $this->Usuario_Model->get($condicao);

		if($novasenha){
			if($usuario->senha == $senhaCrypt){
				if($novasenha == $repetesenha){
					$usuario->senha = $this->encrypt->sha1($novasenha);
					$this->Login_Model->update($usuario);
					$this->session->set_flashdata('flashSuccess', 'Informações alteradas com sucesso.');
				}
				else {
					$this->session->set_flashdata('flashError', 'A nova senha e a confirmação estão diferentes.');
				}
			}
			else {
				$this->session->set_flashdata('flashError', 'A senha atual está incorreta.');
			}
		}
		$this->session->set_flashdata('secaoatual', 'alterar-conta');
		$this->session->set_flashdata('secaoatual', 'alterar-conta');
		redirect('God Knows where');
	}
}