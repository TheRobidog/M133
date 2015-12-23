<?php

	class Warenkorb{
		private $id;
		private $antiquitaet;
		private $price;
		private $account;
		
		public function __construct(
			$id=null
			,$antiquitaet=null
			,$price=null
			,$account=null
		){
			$this->id = $id;
			$this->antiquitaet = $antiquitaet;
			$this->price = $price;
			$this->account = $account;
		}

		public function getId(){
			return $this->id;
		}

		public function getAntiquitaet(){
			return $this->antiquitaet;
		}

		public function getPrice(){
			return $this->price;
		}

		public function getAccount(){
			return $this->account;
		}

		public function setId($eid){
			$this->id = $eid;
		}

		public function setAntiquitaet($eantiquitaet){
			$this->antiquitaet[] = $eantiquitaet;
		}

		public function setPrice($eprice){
			$this->price = $eprice;
		}

		public function setAccount($eaccount){
			$this->account = $eaccount;
		}
	}

?>