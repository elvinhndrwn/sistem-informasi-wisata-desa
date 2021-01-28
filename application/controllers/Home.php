<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model', 'Kategori');
		$this->load->model('Galeri_model', 'Galeri');
		$this->load->model('Objek_wisata_model', 'Wisata');
		$this->load->model('Komentar_model', 'Komentar');
	}

	public function index()
	{
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();

		$this->load->view('front/templates/v_header', $data);
		$this->load->view('front/templates/v_content');
		$this->load->view('front/templates/v_footer');
	}

	public function wisata($id_kategori){
		$data['title'] = 'Wisata Alam';
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();
		$data['wisata'] = $this->Kategori->see($id_kategori)->result();

		$this->load->view('front/templates/v_header', $data);
		$this->load->view('front/v_wisata');
		$this->load->view('front/templates/v_footer');
	}

	public function profil(){
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();

		$this->load->view('front/templates/v_header', $data);
		$this->load->view('front/v_profil');
		$this->load->view('front/templates/v_footer');
	}

	public function struktur_organisasi(){
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();

		$this->load->view('front/templates/v_header', $data);
		$this->load->view('front/v_struktur_organisasi');
		$this->load->view('front/templates/v_footer');
	}

	public function galeri(){
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();
		$data['galeri'] = $this->Kategori->get("tb_galeri")->result();

		$this->load->view('front/templates/v_header', $data);
		$this->load->view('front/v_galeri');
		$this->load->view('front/templates/v_footer');
	}

	public function galeri_details($id_galeri){
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();
		$data['detail'] = $this->Galeri->details($id_galeri)->result();

		$this->load->view('front/templates/v_header', $data);
		$this->load->view('front/v_galeri_details');
		$this->load->view('front/templates/v_footer');
	}

	public function lihat_wisata($id_objek_wisata){
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();
		$data['wisata'] = $this->Wisata->lihat_wisata($id_objek_wisata)->result();

		// Header
		$data['id_objek_wisata'] = $id_objek_wisata;
		$data['jml_komentar'] = $this->Komentar->tampil_komentar($id_objek_wisata)->num_rows();
		$data['komentar'] = $this->Komentar->tampil_komentar($id_objek_wisata)->result();

		$this->load->view('front/templates/v_header', $data);
		$this->load->view('front/v_lihat_wisata');
		$this->load->view('front/templates/v_footer');
	}

	// Komentar
	public function kirim_komentar(){
		$isi_komentar = $this->input->post('isi_komentar');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$id_objek_wisata = $this->input->post('id_objek_wisata');
		$seen = '0';
		$status = 'hide';

		$data = array(
			'id_objek_wisata' => $id_objek_wisata,
			'nama' => $nama,
			'email' => $email,
			'isi_komentar' => $isi_komentar,
			'seen' => $seen,
			'status' => $status
		);

		$this->Kategori->add("tb_komentar", $data);
		$this->session->set_flashdata('alert','Admin akan memeriksa Komentar Anda, Terimakasih!');
		redirect('home/lihat_wisata/'.$id_objek_wisata);
	}

		// Balas Komentar
	public function balas_komentar($id_objek_wisata){
		$id_komentar_b = $this->input->post('id_komentar');
		$isi_komentar_b = $this->input->post('isi_komentar');
		$nama_b = $this->input->post('nama');
		$email_b = $this->input->post('email');
		$seen_b = '0';
		$status_b = 'hide';

		$data = array(
			'id_komentar_b' => $id_komentar_b,
			'nama_b' => $nama_b,
			'email_b' => $email_b,
			'isi_komentar_b' => $isi_komentar_b,
			'seen_b' => $seen_b,
			'status_b' => $status_b
		);

		$this->Kategori->add("tb_balas_komentar", $data);
		$this->session->set_flashdata('alert','Admin akan memeriksa Komentar Anda, Terimakasih!');
		redirect('home/lihat_wisata/'.$id_objek_wisata);
	}
}
