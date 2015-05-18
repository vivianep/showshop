<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clienteloja_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('id, usuario, nome, enprinc, endcomp, cep');
		$this->db->where($condicao);
		$this->db->from('clienteloja');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('clienteloja', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('clienteloja', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('clienteloja');		
	}
}