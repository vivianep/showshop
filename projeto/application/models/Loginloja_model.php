<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginLoja_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('usuario, codloja, mastercode, senha, nome, email, nivelacesso');
		$this->db->where($condicao);
		$this->db->from('loginloja');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('loginloja', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where(array('codloja'=>$itens['codloja'], 'mastercode'=>$itens['mastercode']));
	    $this->db->update('loginloja', $itens);
	    return $itens['mastercode'];
	}
	
	public function delete($condicao){
		$this->db->where($condicao);
		return $this->db->delete('loginloja');		
	}
}
