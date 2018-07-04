<?php
	
	class My_model extends CI_Model{

		public function firstName(){

			$lastName = $this->lastName();	
			 return " Sonu " . $lastName; 
		}

		private function lastName(){

			return "Prajapati";
		}
	}

?>