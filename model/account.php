<?php
	
	class Account{
		private $id;
		private $username;
		private $password;
		private $profil;
		private $sprache;

		public function __construct(
			$id=null
			,$username=null
			,$password=null
			,$profil=null
			,$sprache=null
		){
			$this->id = $id;
			$this->username = $username;
			$this->password = $password;
			$this->profil = $profil;
			$this->sprache = $sprache;
		}

		public function getId(){
			return $this->id;
		}

		public function getUsername(){
			return $this->username;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getProfil(){
			return $this->profil;
		}

		public function getSprache(){
			return $this->sprache;
		}

		public function setId($eid){
			$this->id = $eid;
		}

		public function setUsername($eusername){
			$this->username = $eusername;
		}

		public function setPassword($epassword){
			$this->password = $epassword;
		}

		public function setProfil($eprofil){
			$this->profil = $eprofil;
		}

		public function setSprache($esprache){
			$this->sprache = $esprache;
		}
	}

?>