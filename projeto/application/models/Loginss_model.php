<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginss_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('id, usuario, mastercode, senha, nome, email, nivelacesso');
		$this->db->where($condicao);
		$this->db->from('loginss');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('loginss', $itens);
		return $res;
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('loginss', $itens);
	    return $itens['id'];
	}
	
	public function delete($condicao){
		return $this->db->delete('loginss', $condicao);		
	}
}