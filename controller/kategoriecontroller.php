<?php
	include_once("model/kategorie.php");

	class KategorieController{
		public function __construct(){
			
		}

		public function GetById($id){
			$cat = new Kategorie();

			$catsdata = file('categories.txt');
			foreach($catsdata as $catdata){
				$catarray = explode(':',$catdata);
				if($id == $catdata['0']){
					$cat->id = $catdata['0'];
					$cat->name = $catdata['1'];
				}
			}
			return $cat;
		}
	}

?>