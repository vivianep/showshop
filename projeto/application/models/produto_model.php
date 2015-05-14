<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('cod, codloja, serial, nome, descr, preco, quantidade, tipo, marca, tam');
		$this->db->where($condicao);
		$this->db->from('produto');
		return $this->db->get()->result();
	}
	public function get_produtos(){
		
		$query=$this->db->get('produto');
		return $query ;
	}

	public function post($itens){
		$res = $this->db->insert('produto', $itens);
		return $res;
	}

	public function update($itens){
		$this->db->where('cod', $itens['cod']);
	    $this->db->update('produto', $itens);
	    return $itens['id'];
	}
	
	public function delete($id){
		$this->db->where('cod', $id);
		return $this->db->delete('produto');		
	}
}

?>