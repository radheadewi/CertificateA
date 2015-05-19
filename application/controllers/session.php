<?php

Class Session extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // Load form helper library
        $this->load->helper('form');
        
        // Load session library
        $this->load->library('session');
        
        // Load validation library
        $this->load->library('form_validation');
    }

    public function is_logged_in()
    {
        $user = $this->session->userdata('user_data');
        return isset($user);
    }


}