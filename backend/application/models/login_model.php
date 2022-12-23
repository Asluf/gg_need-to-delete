<?php
class login_model extends CI_MODEL
{
    public function getstudent()
    {
        $query = $this->db->get('login');
        return $query->result();
        
    }

}