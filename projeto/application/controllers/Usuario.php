<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout= "";
		$this->load->model('MasterId_model', 'MasterId_Model');
		$this->load->model('Loginss_model', 'Loginss_Model'); 
	}

	public function autenticar_usuario(){
		$email = $this->input->post('loginemail');
		$senha = $this->input->post('loginsenha');

		$dados = array(
			'email' => $email,
		);
		$usuario = $this->Loginss_Model->get($dados);

		if ($usuario) {
			if($usuario->senha == $senha){
				$this->session->set_flashdata('flashSuccess', 'Usuario autenticado com sucesso');
				$this->session->set_userdata('mastercode', $retorno->mastercode);
				$msg = $this->session->userdata('flashSuccess');
				echo "<script type='text/javascript'>alert('$msg');</script>";
				
				if ($usuario->nivelacesso == 1) {
					redirect('shop');
				}else{
					redirect('painel');
				}
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
	}

	public function cadastrar_usuario_showshop(){		
		$email       = $this->input->post('cadastroemail');
		$senha       = $this->input->post('cadastrosenha');
		$repetesenha = $this->input->post('cadastroconfirmasenha');
		$masterId    = $this->MasterId_Model->post();
		$nivelacesso = 1;
		$usuario = $email;
		
		$dados = array(
			'usuario' => $usuario,
			'email' => $email,
			'senha' => $senha,
			'mastercode' => $masterId,
			'nivelacesso' => $nivelacesso,
		);

		$verifica = $this->Loginss_Model->get(array('email' => $email,));
		
		if (!$verifica) {
			if ($senha == $repetesenha) {
				$retorno = $this->Loginss_Model->post($dados);	
				if($retorno){
					$this->session->set_flashdata('flashSuccess', 'Usuario cadastrado com sucesso.');
					$this->session->set_userdata('mastercode', $masterId);
				} else {
					$this->session->set_flashdata('flashError','Ocorreu um erro ao gravar os dados.');
				}
			}else{
				$this->session->set_flashdata('flashError','Senhas diferenetes');
			}
		}else{
			$this->session->set_flashdata('flashError','Este email já está cadastrado, tente outro');
			$msg = $this->session->userdata('flashError');
			echo "<script type='text/javascript'>alert('$msg');</script>";
		}
	}

	public function remover_conta(){
		$email      = $this->input->post('email');
		$senha      = $this->input->post('senha');
		$senhaCrypt = $this->encrypt->sha1($senha);

		$dados = array(
			'email' => $email,
		);
		
		$usuario = $this->Loginss_Model->get($dados);

		if ($usuario) {
			if($usuario->senha == $senhaCrypt){
				$this->Loginss_Model->delete($dados);
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