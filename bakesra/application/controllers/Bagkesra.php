<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Bagkesra extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

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
                $this->BagkesraModel->save();
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
    public function tampil_artikel()
    {
        $data['bagkesra'] = $this->BagkesraModel->view();
        $this->load->view('bagkesra/tampilsemuaartikel', $data);
    }

    //artikel
    public function artikel($id_artikel)
    {
        $data['bagkesra'] = $this->BagkesraModel->view_by($id_artikel);
        $this->load->view('bagkesra/artikel', $data);
    }
}
