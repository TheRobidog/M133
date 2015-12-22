<?php
	include_once("model/antiquitaet.php");
	include_once("controller/kategoriecontroller.php");
	include_once("model/kategorie.php");

	class AntiquitaetController{
		public function __construct(){
			echo "Antiquitaet Controller geladen";
		}

		public function ShowOne($id){
			$anti = new Antiquitaet();

			$articles = file('storage/article.txt');
			foreach($articles as $article){
				$artarray = explode(':',$article);
				if($id == $artarray['0']){
					$anti->setId($artarray['0']);
					$anti->setName($artarray['1']);
					$anti->setDescription($artarray['2']);
					$catcontrol = new KategorieController();
					$anti->setKategorie($catcontrol->GetById($artarray['3']));
					$anti->setPrice($artarray['4']);
					return $anti;
				}
			}
			return false;
		}

		public function Liste($cat=null){
			$antilist = array();

			$articles = file('storage/article.txt');
			foreach($articles as $article){
				$artarray = explode(':',$article);
				if(isset($cat)){
					if($cat == $artarray['3']){
						$catcontrol = new KategorieController();
						$anti = new Antiquitaet($artarray['0'],$artarray['1'],$artarray['2'],$catcontrol->GetById($artarray['3']),$artarray['4'],$artarray['5']);
						$antilist[] = $anti;
					}
				}else{
					$catcontrol = new KategorieController();
					$anti = new Antiquitaet($artarray['0'],$artarray['1'],$artarray['2'],$catcontrol->GetById($artarray['3']),$artarray['4'],$artarray['5']);
					$antilist[] = $anti;
				}
			}
			return $antilist;
		}
	}

?>