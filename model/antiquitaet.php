<?php

	class Antiquitaet{
		private $id;
		private $name;
		private $description;
		private $kategorie;
		private $price;
		private $image;

		public function __construct(
			$id=null
			,$name=null
			,$description=null
			,$kategorie=null
			,$price=null
			,$image=null
		){
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->kategorie = $kategorie;
			$this->price = $price;
			$this->image = $image;
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

		public function getImage(){
			return $this->image;
		}

		public function setId($eid){
			$this->id = $eid;
		}

		public function setName($ename){
			$this->name = $ename;
		}

		public function setDescription($edescription){
			$this->description = $edescription;
		}

		public function setKategorie($ekategorie){
			$this->kategorie = $ekategorie;
		}

		public function setPrice($eprice){
			$this->price = $eprice;
		}

		public function setImage($eimage){
			$this->image = $eimage;
		}
	}

?>