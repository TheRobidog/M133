<?php
	include_once('model/profil.php');

	class ProfilController{
		public function __construct(){
			echo "Profil Controller geladen"
		}

		public function LoadPro($id){
			$prof = new Profil();

			$allprofs = file('profiles.txt');
			foreach($allprofs as $oneprof){
				$onearr = explode($oneprof);
				if($id == $onearr['0']){
					$prof->id = $onearr['0'];
					$prof->name = $onearr['1'];
					$prof->firstname = $onearr['2'];
					$prof->address = $onearr['3'];
					$prof->postalcode = $onearr['4'];
					$prof->town = $onearr['5'];
					return $prof;
				}
			}
			return false;
		}

		public function SavePro($name,$firstname,$email,$id=null,$address=null,$postalcode=null,$town=null,$county=null){
			if(!isset($id)){
				$profs = file('profiles.txt');
				$lastprof = end($profs);
				$lastarr = explode($lastprof);
				$id = $lastarr['0'] + 1;
			}
			file_put_contents('profiles.txt',$id . ':' . $name . ':' . $firstname . ':' $email . ':' . $address . ':' . $postalcode . ':' . $town . "\n",FILE_APPEND);
			return true;
		}
	}

?>