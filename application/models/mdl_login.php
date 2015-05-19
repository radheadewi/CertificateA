<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Mdl_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
  
  
    public function ambilPengguna($email, $password)
    {
   //     $encryptedpassword=md5($password);
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        //echo $query;
        return $query->num_rows();
    }
  
  
    public function dataPengguna($email)
    {
        //$this->db->select('username');
        $this->db->select('email');
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        //echo $query;
        return $query->row();
    }
  
}  

?>