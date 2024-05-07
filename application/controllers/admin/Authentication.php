<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	public function __construct() {
		
        parent::__construct();
        
    }

	public function login(){		

		if(!empty($_POST)) {
			$userName = $this->input->post('userName',true);
			$password = $this->input->post('password',true);

			$sql = "select * from user where user_name='$userName'";
			$query = $this->db->query($sql);
			$result = $query->result_array();

			if(!empty($result)) {
				$result = $result[0];			
				if(password_verify($password,$result['password'])) {
					$userSession = [
						'user_name'=> $userName,
						'logged_in' => true
					];

					$this->session->set_userdata($userSession);
					redirect('admin/category');
				}				
			}

			setFlashMsg("User Name or Password is incorrect, please try usning correct one",'error');
			// setFlashMsg("Error",'error');
			// redirect('admin/login');
		}

		$this->load->view('admin/login');
	}

	public function logout() {
		$this->session->sess_destroy();
        redirect('admin/login');
	}

}
