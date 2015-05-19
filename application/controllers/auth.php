<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct() {
        parent::__construct();
        
        $this->load->model('mdl_login');
        // Load form helper library
        $this->load->helper('form');
        
        // Load session library
        $this->load->library('session');
        
        // Load validation library
        $this->load->library('form_validation');
    }

	
	public function index()
	{
		
		$session = $this->session->userdata('isLogin');
    
        if($session == FALSE)
        {
            redirect('auth/do_login');
        }
        else
        {
            if($session = $this->session->userdata('email') == 'admin@gmail.com')
            {
                redirect('beranda_admin');
            }
            else
            {
                redirect('beranda');
            }
        }
	}

	
	public function do_login()
	{
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
        $this->form_validation->set_error_delimiters('<br><span class="error">', '</span>');
    
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('auth/login.php');
        }

        else
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $cek = $this->mdl_login->ambilPengguna($email, $password);
        
            if($cek <> 0)
            {
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('email',$email);
         
                redirect('beranda');
            }

            if($email = 'admin@gmail.com' && $password = 'admin')
            {
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('email',$email);

                redirect('beranda_admin');
            }

            else
            {
                echo " <script>
		            alert('Gagal Login: Cek username , password  anda!');
		            history.go(-1);
		          </script>";        
            }
        } 

        /*

		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$encryptedpassword=md5($password);
		$this->load->model('mdl_user');
		if($this->mdl_user->autentifikasi($email, $encryptedpassword))
		{
			$sess_array = array(
                'email'  => $email,
        		'password'     => $encryptedpassword,
        		'logged_in' => TRUE
            );
            
            // Add user value in session
            $this->session->set_userdata($sess_array);
			redirect('beranda');

		}
		if($email = 'admin@gmail.com' && $password = 'admin')
		{
			$sess_array = array(
                'email'  => 'admin@gmail.com',
        		'password'     => 'admin',
        		'logged_in' => TRUE
            );
            
            // Add user value in session
            $this->session->set_userdata($sess_array);
			redirect('beranda_admin');
		}
		else
		{
			redirect('auth');
		}*/
	}

	public function do_logout()
	{
		$this->session->sess_destroy();
		redirect('logout');
	}
}