<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class My_controller extends CI_controller{

		public function index(){

			// echo "This is my controller.."."</br>";
			
			$this->load->view('myindex'); 
			
		}

		public function test(){

			echo "This my test function......";
		}

	}

?>