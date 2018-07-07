<?php

	class User_model extends CI_model{

		function return_users(){

			$this->load->database();

			$this->db->query();

			return ["username"=>"Sonu", "company"=> "IITIANS PACE"];
		}
	}

?>