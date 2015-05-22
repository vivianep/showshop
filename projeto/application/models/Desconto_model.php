<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Desconto_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('cod, produto, desconto, datainicial, datafinal');
		$this->db->where($condicao);
		$this->db->from('desconto');
		return $this->db->get()->result();
	}
	
	public function get_desconto(){	
		$query = $this->db->query('select d.cod as cod, p.nome as produto, d.desconto, d.datainicial as datainicial, d.datafinal as datafinal from produto p, desconto d where d.produto = p.cod;');
		return $query ;
	}
	
	public function get_busca_desconto($termo){		
		$query = $this->db->query('select d.cod as cod, p.nome as produto, d.desconto, d.datainicial as datainicial, d.datafinal as datafinal from produto p, desconto d where d.produto = p.cod and p.nome LIKE \'%'.$termo.'%\'');
		return $query;
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