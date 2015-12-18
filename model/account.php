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
			$this->spreache = $sprache;
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
	}

?>