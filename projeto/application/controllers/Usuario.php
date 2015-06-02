<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout= "";
		$this->load->library('session');
		$this->load->model('Login_model', 'Login_Model'); 
	}

	public function autenticar_usuario(){
		$email = $this->input->post('loginemail');
		$senha = $this->input->post('loginsenha');

		$dados = array(
			'email' => $email,
		);

		$usuario = $this->Login_Model->get($dados)[0];

		if ($usuario) {
			if($usuario->senha == $senha){
				$this->session->set_flashdata('flashSuccess', 'Usuario autenticado com sucesso');
				$this->session->set_userdata('codloja', $usuario->codloja);
				$this->session->set_userdata('usuario', $usuario->email);
				$this->session->set_userdata('nivelacesso', $usuario->nivelacesso);
				$msg = $this->session->userdata('flashSuccess');

				if ($usuario->nivelacesso == 2) {
					redirect('painel');
				}
				echo "<script type='text/javascript'>alert('$msg');</script>";

			}else{
				$this->session->set_flashdata('flashError','Falha na autenticação, senha incorreta');
				$msg = $this->session->userdata('flashError');
				echo "<script type='text/javascript'>alert('$msg');</script>";
			}
		}else{
			$this->session->set_flashdata('flashError','Falha na autenticação, email ou senha incorreto');
			$msg = $this->session->userdata('flashError');
			echo "<script type='text/javascript'>alert('$msg');</script>";
		}
		redirect('shop', 'refresh');
	}

	public function cadastrar_usuario_showshop(){		
		$email       = $this->input->post('cadastroemail');
		$senha       = $this->input->post('cadastrosenha');
		$repetesenha = $this->input->post('cadastroconfirmasenha');
		$nivelacesso = 1;
		$usuario = $email;
		
		$dados = array(
			'usuario' => $usuario,
			'email' => $email,
			'senha' => $senha,
			'nivelacesso' => $nivelacesso,
		);

		$verifica = $this->Login_Model->get(array('email' => $email));
		
		if (!$verifica) {
			if ($senha == $repetesenha) {
				$retorno = $this->Login_Model->post($dados);	
				if($retorno){
					$this->session->set_flashdata('flashSuccess', 'Usuario cadastrado com sucesso.');
					$this->session->set_userdata('usuario', $retorno->usuario);
					$this->session->set_userdata('nivelacesso', $retorno->nivelacesso);
					$msg = $this->session->userdata('flashSuccess');
					echo "<script type='text/javascript'>alert('$msg');</script>";
				} else {
					$this->session->set_flashdata('flashError','Ocorreu um erro ao gravar os dados.');
					$msg = $this->session->userdata('flashError');
					echo "<script type='text/javascript'>alert('$msg');</script>";
				}
			}else{
				$this->session->set_flashdata('flashError','Senhas diferenetes');
				$msg = $this->session->userdata('flashError');
				echo "<script type='text/javascript'>alert('$msg');</script>";
			}
		}else{
			$this->session->set_flashdata('flashError','Este email já está cadastrado, tente outro');
			$msg = $this->session->userdata('flashError');
			echo "<script type='text/javascript'>alert('$msg');</script>";
		}

		$this->template->load('templates/shop', 'shop/home');
	}

	public function remover_conta(){
		$email      = $this->input->post('email');
		$senha      = $this->input->post('senha');
		$senhaCrypt = $this->encrypt->sha1($senha);

		$dados = array(
			'email' => $email,
		);
		
		$usuario = $this->Login_Model->get($dados);

		if ($usuario) {
			if($usuario->senha == $senhaCrypt){
				$this->Login_Model->delete($dados);
				$this->session->set_flashdata('flashError', 'Usuario excluido do sistema');
			} else {
				$this->session->set_flashdata('flashError', 'A senha esta incorreta');
			}
		}else{
			$this->session->set_flashdata('flashError', 'Email inexistente');			
		}
	}

	/* To Do
	 
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
		redirect('God Knows where');
	}*/
}