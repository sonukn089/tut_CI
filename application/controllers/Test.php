<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Test extends CI_controller{

		public function index(){

			echo "index method of test controller.";
		}

		public function test_index(){

			echo "test_index method of test controller.";
		}

		public function test1_index(){

			echo "test1_index method of test controller.";
		}
	}

?>