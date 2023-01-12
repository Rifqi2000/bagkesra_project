<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class RestAdminModel extends CI_Model
{

    public function getArtikel($id_artikel = null)
    {
        if ($id_artikel === null) {
            return $this->db->get('tb_artikel')->result_array();
        } else {
            return $this->db->get_where('tb_artikel', array('id_artikel' => $id_artikel))->result_array();
        }
    }

    public function create_artikel($data)
    {
        $this->db->insert('tb_artikel', $data);
        return $this->db->affected_rows();
    }

    public function delete_artikel($id_artikel)
    {
        $this->db->delete('tb_artikel', ['id_artikel' => $id_artikel]);
        return $this->db->affected_rows();
    }
}
