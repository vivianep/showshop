<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MasterId_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('id, cod');
		$this->db->where($condicao);
		$this->db->from('master_id');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('master_id', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('master_id', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('master_id');		
	}
}