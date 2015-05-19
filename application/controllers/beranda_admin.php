<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda_admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
        $this->load->library(array('session'));
         
        $this->load->helper('url');

        $this->load->model('mdl_login');
        
        $this->load->database();
		
		$this->load->model('mdl_beranda_admin', 'beranda_admin');
		
	}

	function index()
	{
		if($this->session->userdata('isLogin') == FALSE)
        {
            redirect('auth/do_login');
        }

		$config['per_page'] = '100';		
		$data['results'] = $this->beranda_admin->getItem($config['per_page'], $this->uri->segment(3));
		$this->load->view('admin/beranda_admin', $data);
	}

	function sign($id_certificate)
	{
		$data['result'] = $this->beranda_admin->getItemById($id_certificate);

		$output = $data['result']->row()->nama_certificate;
		$csrdata = $data['result']->row()->url;
        echo $csrdata;
		$file = "C:/xampp/htdocs/projectCA/" . $output .".crt";

		$cacert = file_get_contents("C:/xampp/htdocs/projectCA/element dasar/CA/ca.crt");

		$privkey = array(file_get_contents("C:/xampp/htdocs/projectCA/element dasar/CA/ca.key"), "fandazky23");

		$usercert = openssl_csr_sign($csrdata, $cacert, $privkey, 365);

		openssl_x509_export($usercert, $certout) and var_dump($certout);
		openssl_pkey_export($privkey, $pkeyout, "fandazky23") and var_dump($pkeyout);
		echo $certout;

		while (($e = openssl_error_string()) !== false)
		{
    		echo $e . "\n";
		}

		openssl_x509_export_to_file($usercert, $file, FALSE);
	}
}