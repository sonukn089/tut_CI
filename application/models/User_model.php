<?php

	class User_model extends CI_model{

		function return_users(){

			$this->load->database();

			$query = $this->db->query("SELECT * FROM user");

			return ["username"=>"Sonu", "company"=> "IITIANS PACE"];
		}
	}

?>