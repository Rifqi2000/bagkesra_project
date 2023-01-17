<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Bagkesra extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('BagkesraModel');
    }

    public function index()
    {
        $data['bagkesra'] = $this->BagkesraModel->view();
        $this->load->view('bagkesra/beranda', $data);
    }
    public function profil()
    {
        $this->load->view('bagkesra/profil');
    }

    public function kontak()
    {
        if ($this->input->post('submit')) {
            if ($this->BagkesraModel->validation("save")) {
                if (true) {
                    $this->BagkesraModel->save();
                    $this->session->set_flashdata("sukses", "Pesan Berhasil di Kirim");
                } else {
                    $this->session->set_flashdata("gagal", "Pesan Gagal di Kirim");
                }
                redirect('bagkesra');
            }
        }
        // $this->load->view('bagkesra');
    }

    public function struktur()
    {
        $this->load->view('bagkesra/struktur');
    }

    //tampil semua artikel
    public function tampil_artikel($offset = 0)
    {

        $data_artikel = $this->db->get('tb_artikel');

        $config['total_rows'] = $data_artikel->num_rows();
        $config['base_url'] = base_url() . 'Bagkesra/tampil_artikel';

        $config['per_page'] = 4;

        //konfigurasi bootstrap
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);

        $data['halaman'] = $this->pagination->create_links();
        $data['offset'] = $offset;

        $data['bagkesra'] = $this->BagkesraModel->data_pagination($config['per_page'], $offset);
        $this->load->view('bagkesra/tampilsemuaartikel', $data);
    }

    //artikel
    public function artikel($id_artikel)
    {
        $data['bagkesra'] = $this->BagkesraModel->view_by($id_artikel);
        $this->load->view('bagkesra/artikel', $data);
    }
}
