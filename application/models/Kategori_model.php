<?php 

class Kategori_model extends CI_Model{

	public function get($table){
		return $this->db->get($table);
	}

	public function delete($table, $where){
		$this->db->delete($table, $where);
	}

	public function edit($table, $data, $where){
		$this->db->update($table, $data, $where);
	}

	public function add($table, $data){
		$this->db->insert($table, $data);
	}

	public function see($id_kategori){
		return $this->db->query("
			SELECT * FROM tb_objek_wisata
			JOIN tb_kategori ON tb_kategori.id_kategori=tb_objek_wisata.id_kategori
			WHERE tb_objek_wisata.id_kategori = '$id_kategori'
		");
	}
}