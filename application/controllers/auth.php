<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */