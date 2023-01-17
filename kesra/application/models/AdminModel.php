<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class AdminModel extends CI_Model
{

    public function dashboard()
    {
        return $this->db->get('tb_artikel')->result();
    }

    public function getDataById($id_artikel)
    {
        return $this->db->get_where('tb_artikel', array('id_artikel' => $id_artikel));
    }

    public function upload()
    {
        $config['upload_path'] = './assets/img/uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '8192';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_artikel')) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img/uploads/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '50%';
            $config['width'] = 600;
            $config['height'] = 400;
            $config['new_image'] = './assets/img/uploads/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            // $gambar = $gbr['file_name'];

            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {

            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function save($upload)
    {
        $judul_artikel = $this->input->post('input_judul_artikel');
        $sql = $this->db->query("SELECT judul_artikel FROM tb_artikel where judul_artikel='$judul_artikel'");
        $cek_judul = $sql->num_rows();

        if ($cek_judul > 0) {

            $this->session->set_flashdata("cek_judul", "Judul Sudah Ada, Mohon Dicek Kembali");
            redirect('admin');
        } else {
            $data = array(
                'judul_artikel' => $this->input->post('input_judul_artikel'),
                'isi_artikel' => $this->input->post('input_isi_artikel'),
                'foto_artikel' => $upload['file']['file_name'],
                'tanggal_artikel' => $this->input->post('input_tanggal_artikel'),
                'penulis_artikel' => $this->input->post('input_penulis_artikel')
            );

            $this->db->insert('tb_artikel', $data);
        }
    }

    public function update($id_artikel, $data)
    {
        $this->db->where('id_artikel', $id_artikel);
        $this->db->update('tb_artikel', $data);
    }

    public function deleteById($id_artikel)
    {
        $this->db->where('id_artikel', $id_artikel);
        $this->db->delete('tb_artikel');
    }

    //DASHBOARD PESAN

    public function dashboardpesan()
    {
        return $this->db->get('tb_pesan')->result();
    }

    //DASHBOARD AKSES ADMIN

    public function dashboardAksesAdmin()
    {
        return $this->db->get('tb_user')->result();
    }

    public function validationAdmin($mode)
    {
        $this->load->library('form_validation');
        if ($mode == "update" || $mode == "save") {

            $this->form_validation->set_rules('input_nama', 'name', 'required|max_length[40]');
            $this->form_validation->set_rules('input_email', 'email', 'required|max_length[40]');
            $this->form_validation->set_rules('input_username', 'username', 'required|max_length[50]');
            $this->form_validation->set_rules('input_password', 'password', 'required|max_length[50]');
            $this->form_validation->set_rules('input_type', 'type', 'required|max_length[20]');

            if ($this->form_validation->run()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
    public function saveAdmin()
    {
        $data = array(
            "name" => $this->input->post('input_nama'),
            "email" => $this->input->post('input_email'),
            "username" => $this->input->post('input_username'),
            "password" => md5($this->input->post('input_password')),
            "type" => $this->input->post('input_type')
        );

        $this->db->insert('tb_user', $data);
    }

    public function ubahPasswordById($id_admin)
    {
        $data = array(
            "id" => $this->input->post('input_id'),
            "name" => $this->input->post('input_nama'),
            "email" => $this->input->post('input_email'),
            "username" => $this->input->post('input_username'),
            "password" => md5($this->input->post('input_password')),
            "type" => $this->input->post('input_type')
        );

        $this->db->where('id', $id_admin);
        $this->db->update('tb_user', $data);
    }

    public function deleteByIdAdmin($id_admin)
    {
        $this->db->where('id', $id_admin);
        $this->db->delete('tb_user');
    }
}
