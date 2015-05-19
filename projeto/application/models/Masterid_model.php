<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MasterId_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('cod');
		$this->db->where($condicao);
		$this->db->from('master_id');
		return $this->db->get()->result();
	}
	
	public function post(){
		$res = $this->db->insert('master_id', array('cod'=>0));
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('cod', $itens['cod']);
	    $this->db->update('master_id', $itens);
	    return $itens['cod'];
	}
	
	public function delete($id){
		$this->db->where('icodd', $id);
		return $this->db->delete('master_id');		
	}
}