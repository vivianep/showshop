<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tamnominal_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('codprod, tam');
		$this->db->where($condicao);
		$this->db->from('tamnominal');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('tamnominal', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('tamnominal', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('tamnominal');		
	}
}