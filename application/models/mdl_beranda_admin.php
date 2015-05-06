<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class mdl_barang extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function getItem($num=0, $offset=0)
	{
		$this->db->flush_cache();
		$this->db->select('id_certificate, nama_user');
		$this->db->from('certificate');
		$this->db->limit($num, $offset);
		return $this->db->get();
	}	
}
