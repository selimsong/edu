<?php
class Signup extends CI_Controller {
	
	public function  Signup(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index()
	{    
         
		 $this->load->view('signup');
	}
	
	public function create(){
		$this->load->database();
        $this->load->model('user_model', 'user');  
        $this->user->create();
        redirect('login');
         
	}
	
	function logout(){
	
	}
}