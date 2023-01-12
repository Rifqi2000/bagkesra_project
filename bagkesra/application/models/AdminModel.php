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

            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {

            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function save($upload)
    {
        $data = array(
            'judul_artikel' => $this->input->post('input_judul_artikel'),
            'isi_artikel' => $this->input->post('input_isi_artikel'),
            'foto_artikel' => $upload['file']['file_name'],
            'tanggal_artikel' => $this->input->post('input_tanggal_artikel')
        );

        $this->db->insert('tb_artikel', $data);
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
}
