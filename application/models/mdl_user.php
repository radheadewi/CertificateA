<?php

class mdl_user extends CI_Model
{
    function autentifikasi($email, $encryptedpassword)
    {
        $query = $this->db->query("select * from user where email='$email' AND password='$encryptedpassword'");
        if ($query->num_rows() == 1)
        {
            return true;
        }
        else
        {

        }
    }
    
}