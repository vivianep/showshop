<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loja_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('cod, nome, tipo, logo');
		$this->db->where($condicao);
		$this->db->from('loja');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('loja', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('loja', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('loja');		
	}
}
