<?php 

class Auth_model extends CI_Model{

	public function cek_login($username, $password){
		return $this->db->query("SELECT * FROM tb_admin
			WHERE username = '$username' AND password = '$password' ");
	}
}