<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model {
	
	public function get($condicao){
		$this->db->select('usuario, codloja, senha, nome, email, nivelacesso');
		$this->db->where($condicao);
		$this->db->from('login');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('login', $itens);
		return $res;
	}

	public function update($itens){
		$this->db->where(array('usuario'=> $itens['usuario'], 'codloja' => $itens['codloja']));
	    $this->db->update('login', $itens);
	    return $itens['usuario'];
	}
	
	public function delete($condicao){
		return $this->db->delete('login', $condicao);		
	}
}