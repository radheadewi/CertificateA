<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_certificate extends CI_Controller
{	
	public function index()
	{
		$this->load->view('certificate/Add_certificate.php');
	}

	function insert()
	{
		$nama_certificate = $this->input->post('nama_certificate');
		$url = $this->input->post('url');
		$this->load->model('mdl_add_certificate');
		$this->mdl_add_certificate->insert($nama_certificate, $url);
		redirect('add_certificate');
	}

}