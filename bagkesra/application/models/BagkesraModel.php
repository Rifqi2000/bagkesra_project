<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class BagkesraModel extends CI_Model
{

  public function view()
  {
    return $this->db->get('tb_artikel')->result();
  }

  public function view_by($id_artikel)
  {
    $this->db->where('id_artikel', $id_artikel);
    return $this->db->get('tb_artikel')->row();
  }

  public function validation($mode)
  {
    $this->load->library('form_validation');
    if ($mode == "update" || $mode == "save") {
      $this->form_validation->set_rules('nama_rakyat', 'nama_rakyat', 'required|max_length[20]');
      $this->form_validation->set_rules('email_rakyat', 'email_rakyat', 'required|max_length[30]');
      $this->form_validation->set_rules('alamat_rakyat', 'alamat_rakyat', 'required|max_length[30]');
      $this->form_validation->set_rules('nomor_rakyat', 'nomor_rakyat', 'required|max_length[15]');
      $this->form_validation->set_rules('pesan_rakyat', 'pesan_rakyat', 'required');
      if ($this->form_validation->run()) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
  }

  public function save()
  {
    $data = array(
      "nama_rakyat" => $this->input->post('nama_rakyat'),
      "email_rakyat" => $this->input->post('email_rakyat'),
      "alamat_rakyat" => $this->input->post('alamat_rakyat'),
      "nomor_rakyat" => $this->input->post('nomor_rakyat'),
      "pesan_rakyat" => $this->input->post('pesan_rakyat')
    );

    $this->db->insert('tb_pesan', $data);
  }

  public function edit($id_artikel)
  {
    $data = array(
      "judul_artikel" => $this->input->post('input_Judul'),
      "isi_artikel" => $this->input->post('input_Isi'),
      "foto_artikel" => $this->input->post('input_Foto')
    );
    $this->db->where('id_artikel', $id_artikel);
    $this->db->update('tb_artikel', $data);
  }

  public function delete($id_artikel)
  {
    $this->db->where('id_artikel', $id_artikel);
    $this->db->delete('tb_artikel');
  }
  public function cari($id_artikel)
  {
    $this->db->where('id_artikel', $id_artikel);
    return $this->db->get('tb_artikel')->result();
  }
}
