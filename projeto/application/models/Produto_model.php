<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto_Model extends CI_Model {
	
	public function get($condicao = array()){
		$this->db->select('cod, codloja, serial, nome, descr, preco, quantidade, tipo, marca, tam, img');
		$this->db->where($condicao);
		$this->db->from('produto');
		return $this->db->get()->result();
	}
	
	public function getBusca($termo){
		$query = $this->db->query('select * from produto where nome LIKE \'%'.$termo.'%\'');// or descricao LIKE \'%'.$termo.'%\'');	
		return $query;
	}
	
	public function get_produtos(){	
		$query=$this->db->get('produto');
		return $query ;
	}

	public function post($itens){
		$res = $this->db->insert('produto', $itens);
		return $this->db->insert_id();	
	}

	public function update($itens){
		$this->db->where('cod', $itens['cod']);
	    $this->db->update('produto', $itens);
	    return $itens['id'];
	}

	public function update_img($cod,$path){
	 
	    $data = array('img' => $path);
		$this->db->where('cod', $cod);
	    $this->db->update('produto', $data);

	}
	
	public function delete($condicao = array()) {
		if ($condicao != NULL) {
			return $this->db->delete('produto', $condicao);
		}
		
		/*$this->db->where('cod', $id);
		return $this->db->delete('produto');*/

		/*$host = "localhost";
		$user = "root";
		$pass = "admin";
		$banco = "showshop";
		$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
		mysql_select_db($banco) or die(mysql_error());
		$sql = mysql_query("DELETE FROM produto where cod = '$id'");*/
	}
}

?>