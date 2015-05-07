<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function do_login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$encryptedpassword=md5($password);
		$this->load->model('mdl_user');
		if($this->mdl_user->autentifikasi($email, $encryptedpassword))
		{
			redirect('beranda');
		}
	}

	public function do_logout()
	{
		redirect('logout');
	}
}