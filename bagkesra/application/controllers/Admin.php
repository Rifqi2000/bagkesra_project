<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';


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
		// $this->response($data, RestController::HTTP_OK);
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
					'tanggal_artikel' => $this->input->post('input_tanggal_artikel')
				);
			} else {
				$data = array(
					'id_artikel' => $this->input->post('input_id_artikel'),
					'judul_artikel' =>  $this->input->post('input_judul_artikel'),
					'isi_artikel' => $this->input->post('input_isi_artikel'),
					'tanggal_artikel' => $this->input->post('input_tanggal_artikel')
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
		$config = [
			'mailtype'  => 'text',
			'charset'   => 'iso-8859-1',
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'bagkesrasmg@gmail.com',  // Email gmail
			'smtp_pass'   => 'smgmaju2021',  // Password gmail
			'smtp_crypto' => 'ssl',
			'smtp_port'   => 465,
			'crlf'    => "\r\n",
		];

		// Load library email dan konfigurasinya
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		//$this->email->initialize($config);

		// Email dan nama pengirim
		$this->email->from('bagkesrasmg@gmail.com', 'Dinas Penataan Ruang Kota Semarang');

		// Email penerima
		$this->email->to('rifqimulyakiswanto@gmail.com'); // Ganti dengan email tujuan


		// Subject email
		$this->email->subject('Dinas Penataan Ruang Kota Semarang');

		// Isi email
		$this->email->message('Hai');

		// Tampilkan pesan sukses atau error
		if ($this->email->send()) {
			redirect('admin/dashboard');
		} else {
			echo "Error";
		}
	}

	//LOGOUT


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
