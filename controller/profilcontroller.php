<?php
	include_once('model/profil.php');

	class ProfilController{
		public function __construct(){
			echo "Profil Controller geladen";
		}

		public function LoadPro($id){
			$prof = new Profil();

			$allprofs = file('profiles.txt');
			foreach($allprofs as $oneprof){
				$onearr = explode($oneprof);
				if($id == $onearr['0']){
					$prof->setId($onearr['0']);
					$prof->setName($onearr['1']);
					$prof->setFirstname($onearr['2']);
					$prof->setAddress($onearr['3']);
					$prof->setPostalcode($onearr['4']);
					$prof->setTown($onearr['5']);
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
			file_put_contents('profiles.txt',$id . ':' . $name . ':' . $firstname . ':' . $email . ':' . $address . ':' . $postalcode . ':' . $town . "\n",FILE_APPEND);
			return true;
		}
	}

?>