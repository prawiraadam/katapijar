<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_profile extends CI_Model
{

    //COMPLETE ALL FUNCTION IN HERE

    public function Get_Profile($user_id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }
}
