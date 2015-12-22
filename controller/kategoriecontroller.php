<?php
	include_once("model/kategorie.php");

	class KategorieController{
		public function __construct(){
			
		}

		public function GetById($id){
			$cat = new Kategorie();

			$catsdata = file('storage/category.txt');
			foreach($catsdata as $catdata){
				$catarray = explode(':',$catdata);
				if($id == $catdata['0']){
					$cat->setId($catdata['0']);
					$cat->setName($catdata['1']);
					return $cat;
				}
			}
			return false;
		}
	}

?>