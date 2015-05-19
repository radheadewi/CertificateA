<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class List_Certificate extends CI_Controller {

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

	public function __construct() {
        parent::__construct();
                
        $this->load->library(array('session'));
         
        $this->load->helper('url');

        $this->load->model('mdl_login');
        
        $this->load->database();
        
    }
    
	public function index()
	{
		if($this->session->userdata('isLogin') == FALSE)
        {
            redirect('auth/do_login');
        }

		$this->load->view('certificate/list_certificate.php');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */