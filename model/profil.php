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

		public function setId($eid){
			$this->id = $eid;
		}

		public function setName($ename){
			$this->name = $ename;
		}

		public function setFirstname($efirstname){
			$this->firstname = $efirstname;
		}

		public function setEmail($eemail){
			$this->email = $eemail;
		}

		public function setAddress($eaddress){
			$this->address = $eaddress;
		}

		public function setPostalCode($epostalcode){
			$this->postalcode = $epostalcode;
		}

		public function setTown($etown){
			$this->town = $etown;
		}

		public function setCountry($ecountry){
			$this->country = $ecountry;
		}
	}



?>