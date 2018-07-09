<?php
	
	class User_details extends CI_controller{

		function index(){

			// echo "Test";
			
			$this->load->model('user_model');        //load model Name
			$data['userArray'] = $this->user_model->return_users();       // function Name
			$this->load->view('user_view', $data);
		}
	}
?>