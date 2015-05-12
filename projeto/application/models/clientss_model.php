<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientss_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('id, usuario, nome, enprinc, endcomp, cep');
		$this->db->where($condicao);
		$this->db->from('clientess');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('clientess', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('clientess', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('clientess');		
	}
}