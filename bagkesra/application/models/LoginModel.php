<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class LoginModel extends CI_Model
{
    public function cek_login($data, $where)
    {
        return $this->db->get_where($data, $where);
    }
}
