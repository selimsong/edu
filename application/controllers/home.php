<?php
class Home extends CI_Controller {
	
	public function  Home(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index()
	{    
		  echo 'welcome';
	}

	
	
}