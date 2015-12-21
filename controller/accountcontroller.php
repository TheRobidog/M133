<?php
	include_once 'model/account.php';
	include_once 'controller/profilcontrollor.php';
	include_once 'controller/sprachecontroller.php';

	class AccountController{
		public function __construct(){
			echo "Account Controller aufgerufen!";
		}

		public function LoadAcc($id){
			$acc = new Account();

			$allaccs = file('accounts.txt');
			foreach($allaccs as $allacc){
				$accarr = explode(':',$allacc);
				if($id == $accarr['0']){
					$acc->id = $accarr['0'];
					$acc->username = $accarr['1'];
					$acc->password = $accarr['2'];
					$pro = new ProfilController();
					$acc->profil = $pro->GetById($accarr['3']);
					$lan = new SpracheController();
					$acc->sprache = $lan->GetById($accarr['4']);
				}
			}
			return $acc;
		}

		public function SaveAcc($username,$password,$profil,$sprache,$id=null){
			if(!isset($id)){
				$accs = file('accounts.txt');
				$lastacc = end($accs);
				$lastarr = explode($lastacc);
				$id = $lastarr['0'] + 1;
			}
			$profilid = $profil->id;
			$spracheid = $sprache->id;
			file_put_contents('accounts.txt',$id . ':' . $username . ':' . $password . ':' $profilid . ':' . $spracheid . "\n",FILE_APPEND);
			return true;
		}
	}

?>