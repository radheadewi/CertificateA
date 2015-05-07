<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda_admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mdl_beranda_admin', 'beranda_admin');
		
	}

	function index()
	{
		$config['per_page'] = '100';		
		$data['results'] = $this->beranda_admin->getItem($config['per_page'], $this->uri->segment(3));
		$this->load->view('beranda/beranda_admin', $data);
	}
}