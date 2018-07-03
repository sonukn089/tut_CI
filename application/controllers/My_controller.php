<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class My_controller extends CI_Controller{

		public function index(){

			echo "<h1>This is my CI_Controller...</h1>";
			$this->load->view('myindexview');
		}
		public function test(){

			echo "<h2>THis is the test fuction from My Controller...</h2>";
		}
	}

?>