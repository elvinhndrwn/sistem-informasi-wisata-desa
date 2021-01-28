<?php 

class Admin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model', 'Kategori');
		$this->load->model('Objek_wisata_model', 'Wisata');
		$this->load->model('Galeri_model', 'Galeri');
		$this->load->model('Komentar_model', 'Komentar');
		$this->load->model('Balas_model', 'Balas');
	}

	public function index(){
		$data['title'] = 'Dashboard';
		$data['nama_admin'] = $_SESSION['nama_admin'];

		$this->load->view('admin/templates/v_header');
		$this->load->view('admin/templates/v_sidebar');
		$this->load->view('admin/templates/v_topbar', $data);
		$this->load->view('admin/v_dashboard', $data);
		$this->load->view('admin/templates/v_footer');
	}

	// MASTER DATA
	// Kategori
	public function kategori(){
		$data['title'] = 'Data Kategori';
		$data['nama_admin'] = $_SESSION['nama_admin'];
		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();

		$this->load->view('admin/templates/v_header');
		$this->load->view('admin/templates/v_sidebar');
		$this->load->view('admin/templates/v_topbar', $data);
		$this->load->view('admin/v_kategori');
		$this->load->view('admin/templates/v_footer');
	}

	public function kategori_hapus($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->Kategori->delete("tb_kategori", $where);

		$this->session->set_flashdata('alert','Kategori Berhasil Dihapus!');
		redirect('admin/kategori');
	}

	public function kategori_edit(){
		$id_kategori = $this->input->post("id_kategori");
		$nama_kategori = $this->input->post("nama_kategori");

		$where = array('id_kategori' => $id_kategori);


		// Tangkap Inputan Foto
		$path = "assets/svg";
		$config['upload_path'] = './'.$path.'/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = 0;

		$this->load->library('upload', $config);

		$this->upload->do_upload('icon_kategori');
		$icon_kategori = $this->upload->data();

		if($icon_kategori['file_name'] != ''){
			$data = array('nama_kategori' => $nama_kategori, 'icon_kategori' => $icon_kategori["file_name"]);
		}else{
			$data = array('nama_kategori' => $nama_kategori);
		}


		$this->Kategori->edit("tb_kategori", $data, $where);
		$this->session->set_flashdata('alert','Kategori Berhasil Diedit!');
		redirect('admin/kategori');
	}

	public function kategori_tambah(){
		$nama_kategori = $this->input->post("nama_kategori");


		// Tangkap Inputan Foto
		$path = "assets/svg";
		$config['upload_path'] = './'.$path.'/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = 0;

		$this->load->library('upload', $config);

		$this->upload->do_upload('icon_kategori');
		$icon_kategori = $this->upload->data();

		$data = array('nama_kategori' => $nama_kategori, 'icon_kategori' => $icon_kategori["file_name"]);
		$this->Kategori->add("tb_kategori", $data);

		$this->session->set_flashdata('alert','Kategori Berhasil Ditambah!');
		redirect('admin/kategori');
	}

	// Objek Wisata
	public function objek_wisata(){
		$data['title'] = 'Data Objek Wisata';
		$data['nama_admin'] = $_SESSION['nama_admin'];


		$data['kategori'] = $this->Kategori->get("tb_kategori")->result();
		$data['objek'] = $this->Wisata->get()->result();
		$data['num_objek'] = $this->Wisata->get()->num_rows();

		$this->load->view('admin/templates/v_header');
		$this->load->view('admin/templates/v_sidebar');
		$this->load->view('admin/templates/v_topbar', $data);
		$this->load->view('admin/v_objek_wisata');
		$this->load->view('admin/templates/v_footer');
	}

	public function objek_wisata_tambah(){
		$id_kategori = $this->input->post("id_kategori");
		$nama_objek_wisata = $this->input->post("nama_objek_wisata");
		$lokasi_wisata = $this->input->post("lokasi_wisata");
		$deskripsi_wisata = $this->input->post("deskripsi_wisata");

		// Tangkap Inputan Foto
		$path = "assets/galeri";
		$config['upload_path'] = './'.$path.'/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = 0;

		$this->load->library('upload', $config);

		$this->upload->do_upload('icon');
		$icon = $this->upload->data();

		$data = array(
			'id_kategori' => $id_kategori, 
			'nama_objek_wisata' => $nama_objek_wisata, 
			'lokasi_wisata' => $lokasi_wisata, 
			'icon' => $icon['file_name'],
			'deskripsi_wisata' => $deskripsi_wisata
		);
		$this->Wisata->add("tb_objek_wisata", $data);

		$this->session->set_flashdata('alert','Objek Wisata Berhasil Ditambah!');
		redirect('admin/objek_wisata');
	}

	public function objek_wisata_edit(){
		$id_objek_wisata = $this->input->post("id_objek_wisata");
		$id_kategori = $this->input->post("id_kategori");
		$nama_objek_wisata = $this->input->post("nama_objek_wisata");
		$lokasi_wisata = $this->input->post("lokasi_wisata");
		$deskripsi_wisata = $this->input->post("deskripsi_wisata");

		$where = array('id_objek_wisata' => $id_objek_wisata);

		// Tangkap Inputan Foto
		$path = "assets/galeri";
		$config['upload_path'] = './'.$path.'/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = 0;

		$this->load->library('upload', $config);

		$this->upload->do_upload('icon');
		$icon = $this->upload->data();

		if($icon['file_name'] != ''){
			$data = array(
				'id_kategori' => $id_kategori, 
				'nama_objek_wisata' => $nama_objek_wisata,
				'lokasi_wisata' => $lokasi_wisata,
				'icon' => $icon['file_name'],
				'deskripsi_wisata' => $deskripsi_wisata
			);
		}else{
			$data = array(
				'id_kategori' => $id_kategori, 
				'nama_objek_wisata' => $nama_objek_wisata,
				'lokasi_wisata' => $lokasi_wisata,
				'deskripsi_wisata' => $deskripsi_wisata
			);
		}
		
		$this->Wisata->edit("tb_objek_wisata", $data, $where);
		$this->session->set_flashdata('alert','Objek Wisata Berhasil Diedit!');
		redirect('admin/objek_wisata');
	}

	public function objek_wisata_hapus($id_objek_wisata){
		$where = array('id_objek_wisata' => $id_objek_wisata);
		$this->Wisata->delete("tb_objek_wisata", $where);

		$this->session->set_flashdata('alert','Objek Wisata Berhasil Dihapus!');
		redirect('admin/objek_wisata');
	}

	// Galeri
	public function galeri(){
		$data['title'] = 'Data Galeri';
		$data['nama_admin'] = $_SESSION['nama_admin'];
		$data['galeri'] = $this->Galeri->get()->result();
		$data['objek_wisata'] = $this->db->get("tb_objek_wisata")->result();

		$this->load->view('admin/templates/v_header');
		$this->load->view('admin/templates/v_sidebar');
		$this->load->view('admin/templates/v_topbar', $data);
		$this->load->view('admin/v_galeri');
		$this->load->view('admin/templates/v_footer');
	}

	public function galeri_tambah(){
		$id_objek_wisata = $this->input->post("id_objek_wisata");
		$deskripsi = $this->input->post("deskripsi");

		// Tangkap Inputan Foto
		$path = "assets/galeri";
		$config['upload_path'] = './'.$path.'/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = 0;

		$this->load->library('upload', $config);

		$this->upload->do_upload('foto');
		$foto = $this->upload->data();

		$data = array(
			'id_objek_wisata' => $id_objek_wisata, 
			'foto' => $foto['file_name'],
			'deskripsi' => $deskripsi
		);


		$this->Galeri->add("tb_galeri", $data);

		$this->session->set_flashdata('alert','Galeri Berhasil Ditambah!');
		redirect('admin/galeri');
	}

	public function galeri_hapus($id_galeri){
		$where = array('id_galeri' => $id_galeri);
		$this->Galeri->delete("tb_galeri", $where);

		$this->session->set_flashdata('alert','Galeri Berhasil Dihapus!');
		redirect('admin/galeri');
	}

	public function galeri_edit(){
		$id_galeri = $this->input->post("id_galeri");
		$id_objek_wisata = $this->input->post("id_objek_wisata");
		$deskripsi = $this->input->post("deskripsi");


		// Tangkap Inputan Foto
		$path = "assets/galeri";
		$config['upload_path'] = './'.$path.'/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = 0;

		$this->load->library('upload', $config);

		$this->upload->do_upload('foto');
		$foto = $this->upload->data();

		$where = array('id_galeri' => $id_galeri);

		if($foto['file_name'] != ''){
			$data = array(
				'id_objek_wisata' => $id_objek_wisata,
				'foto' => $foto['file_name'],
				'deskripsi' => $deskripsi
			);
		}else{
			$data = array(
				'id_objek_wisata' => $id_objek_wisata,
				'deskripsi' => $deskripsi
			);
		}

		$this->Galeri->edit("tb_galeri", $data, $where);
		$this->session->set_flashdata('alert','Galeri Berhasil Diedit!');
		redirect('admin/galeri');
	}

	public function komentar(){
		$data['title'] = 'Dashboard';
		$data['nama_admin'] = $_SESSION['nama_admin'];
		$data['komentar'] = $this->Komentar->get()->result();

		$this->load->view('admin/templates/v_header');
		$this->load->view('admin/templates/v_sidebar');
		$this->load->view('admin/templates/v_topbar', $data);
		$this->load->view('admin/v_komentar', $data);
		$this->load->view('admin/templates/v_footer');
	}

	public function komentar_verifikasi($id_komentar){
		$where = array('id_komentar' => $id_komentar);
		$data = array(
			'seen' => "1",
			'status' => "show"
		);

		$this->Komentar->edit("tb_komentar", $data, $where);
		$this->session->set_flashdata('alert','Komentar Berhasil Ditambah!');
		redirect('admin/komentar');

	}

	public function komentar_hapus($id_komentar){
		$where = array('id_komentar' => $id_komentar);
		$this->Komentar->delete("tb_komentar", $where);

		$this->session->set_flashdata('alert','Komentar Berhasil Dihapus!');
		redirect('admin/komentar');

	}

	public function balas_komentar_hapus($id_balas_komentar){
		$where = array('id_balas_komentar' => $id_balas_komentar);
		$this->Komentar->delete("tb_balas_komentar", $where);

		$this->session->set_flashdata('alert','Komentar Berhasil Dihapus!');
		redirect('admin/balas_komentar');

	}

	public function balas_komentar(){
		$data['title'] = 'Dashboard';
		$data['nama_admin'] = $_SESSION['nama_admin'];
		$data['komentar'] = $this->Balas->get()->result();

		$this->load->view('admin/templates/v_header');
		$this->load->view('admin/templates/v_sidebar');
		$this->load->view('admin/templates/v_topbar', $data);
		$this->load->view('admin/v_balas_komentar', $data);
		$this->load->view('admin/templates/v_footer');
	}

	public function balas_komentar_verifikasi($id_balas_komentar){
		$where = array('id_balas_komentar' => $id_balas_komentar);
		$data = array(
			'seen_b' => "1",
			'status_b' => "show"
		);

		$this->Balas->edit("tb_balas_komentar", $data, $where);
		$this->session->set_flashdata('alert','Komentar Berhasil Ditambah!');
		redirect('admin/balas_komentar');

	}
}