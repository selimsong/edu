<?php

class user_model  extends CI_Model{
	

	function create(){
		$this->user_name = addslashes(trim($_POST['name']));
		$this->password  = md5(addslashes(trim($_POST['password'])));
		$this->email     = addslashes(trim($_POST['email']));
		$this->db->insert('users', $this);
	}
	
	
	
}