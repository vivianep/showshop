<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prodss_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('id, serial, nome, descr, img');
		$this->db->where($condicao);
		$this->db->from('prodss');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('prodss', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('prodss', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('prodss');		
	}
}