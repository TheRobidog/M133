<?php

	class Bestellung{
		private $id;
		private $warenkorb;
		private $account;

		public function __construct(
			$id=null
			,$warenkorb=null
			,$account=null
		){
			$this->id = $id;
			$this->warenkorb = $warenkorb;
			$this->account = $account;
		}

		public function getId(){
			return $this->id;
		}

		public function getWarenkorb(){
			return $this->warenkorb;
		}

		public function getAccount(){
			return $this->account;
		}
	}

?>