<?php 

class Objek_wisata_model extends CI_Model{

	public function get(){
		return $this->db->query("
			SELECT * FROM tb_objek_wisata
			JOIN tb_kategori ON tb_kategori.id_kategori=tb_objek_wisata.id_kategori
			");
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

	public function lihat_wisata($id_objek_wisata){
		return $this->db->query("
			SELECT * FROM tb_objek_wisata
			JOIN tb_kategori ON tb_kategori.id_kategori=tb_objek_wisata.id_kategori
			WHERE tb_objek_wisata.id_objek_wisata = '$id_objek_wisata'
			");
	}
}