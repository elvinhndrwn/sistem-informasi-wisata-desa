<?php 

class Balas_model extends CI_Model{

	public function get(){
		return $this->db->query("
			SELECT * FROM tb_balas_komentar
			JOIN tb_komentar ON tb_komentar.id_komentar=tb_balas_komentar.id_komentar_b
			JOIN tb_objek_wisata ON tb_komentar.id_objek_wisata=tb_objek_wisata.id_objek_wisata
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

	public function details($id_galeri){
		return $this->db->query("
			SELECT * FROM tb_galeri
			JOIN tb_objek_wisata ON tb_objek_wisata.id_objek_wisata=tb_galeri.id_objek_wisata
			WHERE tb_galeri.id_galeri = '$id_galeri'
			");
	}

	public function tampil_komentar($id_objek_wisata){
		return $this->db->query("SELECT * FROM tb_komentar WHERE id_objek_wisata = '$id_objek_wisata' AND seen = '1' AND status = 'show' ");
	}
}