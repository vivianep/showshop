<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loja_Model extends CI_Model {
	
	/*public function get($condicao = array()){
		$this->db->select('cod, nome, tipo, logo');
		$this->db->where($condicao);
		$this->db->order_by('nome');
		$this->db->from('loja');
		return $this->db->get()->result();
	}*/
	
	public function get(){	
		$query=$this->db->get('loja');
		return $query;
	}
	
	public function getBusca($termo){
		$query = $this->db->query('select * from loja where nome LIKE \'%'.$termo.'%\'');// or descricao LIKE \'%'.$termo.'%\'');	
		return $query;
	}
	
	public function get_categorias($codloja){
		$this->db->distinct('tipo');
		$this->db->where(array('codloja'=>$codloja));
		$this->db->from('produto');
		return $this->db->get()->result();
	}
	
	public function post($itens){
		$res = $this->db->insert('loja', $itens);
		return $this->db->insert_id();
	}

	public function update($itens){
		$this->db->where('cod', $itens['cod']);
	    $this->db->update('loja', $itens);
	    return $itens['cod'];
	}
	
	public function delete($id){
		$this->db->where('cod', $id);
		return $this->db->delete('loja');		
	}
}