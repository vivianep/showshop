<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VitrineLoja_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('codloja, vitrine1, vitrine2, vitrine3, vitrine4, vitrine1banner, vitrine2banner, vitrine3banner, vitrine4banner');
		$this->db->where($condicao);
		$this->db->from('vitrineloja');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('vitrineloja', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('codloja', $itens['codloja']);
	    $this->db->update('vitrineloja', $itens);
	    return $itens['codloja'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('vitrineloja');		
	}
}