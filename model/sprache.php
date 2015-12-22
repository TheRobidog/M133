<?php

	class Sprache{
		private $id;
		private $name;

		public function __construct(
			$id=null
			,$name=null
		){
			$this->id = $id;
			$name->name = $name;
		}

		public function getId(){
			return $this->id;
		}

		public function getName(){
			return $this->name;
		}

		public function setId($eid){
			$this->id = $eid;
		}

		public function setName($ename){
			$this->name = $ename;
		}
	}

?>