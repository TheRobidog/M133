<?php
	include_once("model/antiquitaet.php");
	include_once("controller/kategoriecontroller.php");
	include_once("model/kategorie.php")

	class AntiquitaetController{
		public function __construct(){
			echo "Antiquitaet Controller geladen"
		}

		public function ShowOne($id){
			$anti = new Antiquitaet();

			$articles = file('articles.txt');
			foreach($articles as $article){
				$artarray = explode(':',$article);
				if($id == $artarray['0']){
					$anti->id = $artarray['0'];
					$anti->name = $artarray['1'];
					$anti->description = $artarray['2'];
					$catcontrol = new KategorieController();
					$anti->kategorie = $catcontrol->GetById($artarray['3']);
					$anti->price = $artarray['4'];
					return $anti;
				}
			}
			return false;
		}

		public function List($cat=null){
			$antilist = new Array();

			$articles = file('articles.txt');
			foreach($articles as $article){
				$artarray = explode(':',$article);
				if(isset($cat)){
					if($cat == $artarray['3']){
						$catcontrol = new KategorieController();
						$anti = new Antiquitaet($artarray['0'],$artarray['1'],$artarray['2'],$catcontrol->GetById($artarray['3']),$artarray['4']);
						$antilist[] = $anti;
					}
				}else{
					$catcontrol = new KategorieController();
					$anti = new Antiquitaet($artarray['0'],$artarray['1'],$artarray['2'],$catcontrol->GetById($artarray['3']),$artarray['4']);
					$antilist[] = $anti;
				}
			}
			return $antilist;
		}
	}

?>