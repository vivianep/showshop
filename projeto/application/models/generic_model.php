<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generic_Model extends CI_Model {
	
	public function get($table = '', $columns = '', $condicao = array()){
		$this->db->select($columns);
		$this->db->where($condicao);
		$this->db->from($table);
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert($table, $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update($table, $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete($table);		
	}
}