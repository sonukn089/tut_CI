<?php

	class User_model extends CI_model{

		function return_users(){

			// return ["username"=>"Sonu", "company"=> "IITIANS PACE"];

			$this->load->database();

			$query = $this->db->query("SELECT * FROM user");

		}
	}

?>