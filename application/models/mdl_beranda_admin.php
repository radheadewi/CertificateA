<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Mdl_beranda_admin extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function getItem($num=0, $offset=0)
	{
		$this->db->flush_cache();
		$this->db->select('id_certificate, nama_certificate');
		$this->db->from('certificate');
		$this->db->limit($num, $offset);
		return $this->db->get();
	}

	function signing($num=0, $offset=0)
	{
		$this->db->flush_cache();
		$this->db->select('nama_certificate, url');
		$this->db->from('certificate');
		$this->db->limit($num, $offset);
		return $this->db->get();
	}
}
