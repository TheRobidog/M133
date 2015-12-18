<?php

	class Antiquitaet(){
		private $id;
		private $name;
		private $description;
		private $kategorie;
		private $price;

		public function __construct(
			$id=null
			,$name=null
			,$description=null
			,$kategorie=null
			,$price=null
		){
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->kategorie = $kategorie;
			$this->price = $price;
		}

		public function getId(){
			return $this->id;
		}

		public function getName(){
			return $this->name;
		}

		public function getDescription(){
			return $this->description;
		}

		public function getKategorie(){
			return $this->kategorie;
		}

		public function getPrice(){
			return $this->price;
		}
	}

?>