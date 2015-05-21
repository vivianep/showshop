<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Desconto_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('cod, produto, desconto, datainicial, datafinal');
		$this->db->where($condicao);
		$this->db->from('desconto');
		return $this->db->get()->result();
	}
	
	public function get_desconto(){		
		/*$this->db->select('d.cod as cod, p.nome as nome, d.desconto as desconto, d.datainicial as datainicial, d.datafinal as datafinal');
		$this->db->where('d.produto' => 'p.cod');
		$this->db->from('desconto d, produto p');
	
		return $this->db->get()->result();*/
		$query=$this->db->get('desconto');
		return $query ;
	}
	
	public function post($itens){
		$res = $this->db->insert('desconto', $itens);
		//return $this->db->insert_id();
		return $res;
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('desconto', $itens);
	    return $itens['id'];
	}
	
	public function delete($condicao = array()) {
		if ($condicao != NULL) {
			return $this->db->delete('desconto', $condicao);
		}
	}
}