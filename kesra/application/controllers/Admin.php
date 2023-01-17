<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		if ($this->session->userdata('status') != "login") {
			redirect("login");
		}
	}

	//LOGIN

	public function index()
	{
		$data['bagkesra'] = $this->AdminModel->dashboard();
		$this->load->view('admin/dashboard', $data);
	}



	//DASHBOARD

	// public function dashboard()
	// {
	// 	$data['bagkesra'] = $this->AdminModel->dashboard();
	// 	$this->load->view('admin/dashboard', $data);
	// }

	public function tambah()
	{
		$data = array();

		if ($this->input->post('submit')) {

			$upload = $this->AdminModel->upload();

			if ($upload['result'] == "success") {

				$this->AdminModel->save($upload);

				redirect('admin');
			} else {
				$data['message'] = $upload['error'];
			}
		}

		redirect('admin');
	}

	public function edit()
	{
		$id_artikel = $this->input->post('input_id_artikel');
		$data = $this->AdminModel->getDataById($id_artikel)->row();


		if ($this->input->post('submit')) {

			$upload = $this->AdminModel->upload();

			if ($upload['result'] == "success") {
				$foto = $upload['file']['file_name'];
			}
			if ($foto != "") {
				$data = array(
					'id_artikel' => $this->input->post('input_id_artikel'),
					'judul_artikel' =>  $this->input->post('input_judul_artikel'),
					'isi_artikel' => $this->input->post('input_isi_artikel'),

					'foto_artikel' => $foto,
					'tanggal_artikel' => $this->input->post('input_tanggal_artikel'),
					'penulis_artikel' => $this->input->post('input_penulis_artikel')
				);
			} else {
				$data = array(
					'id_artikel' => $this->input->post('input_id_artikel'),
					'judul_artikel' =>  $this->input->post('input_judul_artikel'),
					'isi_artikel' => $this->input->post('input_isi_artikel'),
					'tanggal_artikel' => $this->input->post('input_tanggal_artikel'),
					'penulis_artikel' => $this->input->post('input_penulis_artikel')
				);
			}

			$this->AdminModel->update($id_artikel, $data);

			redirect('admin');
		}
	}

	public function hapus($Id)
	{
		$this->AdminModel->deleteById($Id); // Panggil fungsi delete() yang ada di KrsModel.php
		redirect('admin');
	}

	//DASHBOARDPESAN

	public function dashboardpesan()
	{
		$data['bagkesra'] = $this->AdminModel->dashboardpesan();
		$this->load->view('admin/dashboardpesan', $data);
	}


	public function balas()
	{

		$from =  $this->input->post('input_email_bagkesra');
		$to = $this->input->post('input_email_rakyat');
		$subject = $this->input->post('input_subject_pesan');
		$message = $this->input->post('input_balas_pesan');

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_user' => 'bagkesrasmg@gmail.com',  // Email gmail
			'smtp_pass'   => 'Smgmaju2021',  // Password gmail
			'smtp_crypto' => 'ssl',
			'smtp_port'   => 465,
			'crlf'    => "\r\n",
			'newline' => "\r\n"
		];

		// Load library email dan konfigurasinya
		$this->load->library('email', $config);

		// Email dan nama pengirim
		$this->email->from($from, 'Bagkesra Kota Semarang');

		// Email penerima
		$this->email->to($to); // Ganti dengan email tujuan

		// Lampiran email, isi dengan url/path file
		//$this->email->attach($file);/

		// Subject email
		$this->email->subject($subject);

		// Isi email
		$this->email->message($message);

		// Tampilkan pesan sukses atau error
		if ($this->email->send()) {
			$this->session->set_flashdata("sukses", "Pesan Berhasil di Balas");
			redirect('admin/dashboardpesan');
		} else {
			$this->session->set_flashdata("gagal", "Pesan Gagal di Balas");
			redirect('admin/dashboardpesan');
		}
	}

	//Akses Admin

	public function aksesAdmin()
	{
		$data['bagkesra'] = $this->AdminModel->dashboardAksesAdmin();
		$this->load->view('admin/aksesadmin', $data);
	}

	public function tambahAdmin()
	{
		if ($this->input->post('submit')) {
			if ($this->AdminModel->validationAdmin("save")) {
				$this->AdminModel->saveAdmin();
				redirect('admin/aksesadmin');
			}
		}
	}

	public function ubahPassword()
	{
		$id_admin = $this->input->post('input_id');
		if ($this->input->post('submit')) {
			if ($this->AdminModel->validationAdmin("save")) {
				$this->AdminModel->ubahPasswordById($id_admin);
				redirect('admin/aksesadmin');
			}
		}
	}

	public function hapusAdmin($id_admin)
	{
		$this->AdminModel->deleteByIdAdmin($id_admin); // Panggil fungsi delete() yang ada di KrsModel.php
		redirect('admin/aksesadmin');
	}


	//LOGOUT


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
