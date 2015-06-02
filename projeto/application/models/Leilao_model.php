<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leilao_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('cod, produto, datainicial, datafinal, precoinicial');
		$this->db->where($condicao);
		$this->db->from('leilao');
		return $this->db->get()->result();
	}
	
	public function get_leilao(){	
		$query = $this->db->query('select l.cod as cod, p.serial as serial, p.nome as produto, l.precoinicial as precoinicial, 
		                                  l.datainicial as datainicial, l.datafinal as datafinal 
								  from leilao l, produto p 
								  where l.produto = p.cod;');
		return $query ;
	}
	
	public function get_busca_leilao($termo){		
		$query = $this->db->query('select l.cod as cod, p.serial as serial, p.nome as produto, l.precoinicial as precoinicial, 
		                                  l.datainicial as datainicial, l.datafinal as datafinal 
								  from leilao l, produto p 
								  where l.produto = p.cod and p.nome LIKE \'%'.$termo.'%\'');	
		return $query;
	}
	
	public function post($itens){
		$res = $this->db->insert('leilao', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('id', $itens['id']);
	    $this->db->update('leilao', $itens);
	    return $itens['id'];
	}
	
	public function delete($condicao = array()){
		if ($condicao != NULL) {
			return $this->db->delete('leilao', $condicao);
		}	
	}
}