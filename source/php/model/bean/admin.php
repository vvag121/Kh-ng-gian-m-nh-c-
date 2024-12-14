<?php 
	class Admin{
		private $email;
		private $nameAdmin;
		private $address;
		private $phone;

		public function __construct($email, $nameAdmin, $address, $phone){
			$this->email = $email;
			$this->nameAdmin = $nameAdmin;
			$this->address = $address;
			$this->phone = $phone;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getNameAdmin(){
			return $this->nameAdmin;
		}

		public function getAddress(){
			return $this->address;
		}

		public function getPhone(){
			return $this->phone;
		}
	}
 ?>