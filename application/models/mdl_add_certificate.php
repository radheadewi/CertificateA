<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Mdl_add_certificate extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	function insert($nama_certificate, $url)
	{
		$this->db->flush_cache();
		$this->db->insert('certificate', array('nama_certificate' => $nama_certificate, 'url' => $url, 'id_user' => 1));
	}
}