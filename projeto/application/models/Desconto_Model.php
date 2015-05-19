<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Desconto_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('id, cod, produto, desconto, datainicial, datafinal');
		$this->db->where($condicao);
		$this->db->from('desconto');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('desconto', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('desconto', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('desconto');		
	}
}