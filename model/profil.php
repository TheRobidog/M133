<?php

	class Profil{
		private $id;
		private $name;
		private $firstname;
		private $email;
		private $address;
		private $postalcode;
		private $town;
		private $country;

		public function __construct(
			$id=null
			,$name=null
			,$firstname=null
			,$email=null
			,$address=null
			,$postalcode=null
			,$town=null
			,$country=null
		){
			$this->id = $id;
			$this->name = $name;
			$this->firstname = $firstname;
			$this->email = $email;
			$this->address = $address;
			$this->postalcode = $postalcode;
			$this->town = $town;
			$this->country = $country;
		}

		public function getId(){
			return $this->id;
		}

		public function getName(){
			return $this->name;
		}

		public function getFirstname(){
			return $this->firstname;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getAddress(){
			return $this->address;
		}

		public function getPostalCode(){
			return $this->postalcode;
		}

		public function getTown(){
			return $this->town;
		}

		public function getCountry(){
			return $this->country;
		}
	}



?>