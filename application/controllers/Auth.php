<?php 
error_reporting(0);
class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model', 'Auth');
	}

	public function index(){
		$data['title'] = 'Halaman Login';

		// Cek apakah sudah login sebelum nya ?
		if($_SESSION['status'] == 'sudah_login'){
			redirect('admin');
		}else{
			$this->load->view('admin/v_login', $data);
		}
	}

	public function cek_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek_login = $this->Auth->cek_login($username, $password)->num_rows();

		// Jika Cocok
		if($cek_login > 0){
			$ambil_data = $this->Auth->cek_login($username, $password)->row();

			// Buat Sesi Login
			$data_session = array(
				'username' => $ambil_data->username,
				'nama_admin' => $ambil_data->nama_admin,
				'akses' => 'admin',
				'status' => 'sudah_login'
			);

			$this->session->set_userdata($data_session);

			$this->session->set_flashdata("pesan", "Login berhasil !");
			redirect('admin');


		// Jika tidak Cocok
		}else{
			echo "FALSE";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}