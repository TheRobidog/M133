<?php
	include_once 'model/account.php';
	include_once 'controller/profilcontrollor.php';
	include_once 'model/profil.php';
	include_once 'controller/sprachecontroller.php';
	include_once 'model/sprache.php';

	class AccountController{
		public function __construct(){
			echo "Account Controller aufgerufen!";
		}

		public function LoadAcc($id){
			$acc = new Account();

			$allaccs = file('account.txt');
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
					return $acc;
				}
			}
			return false;
		}

		public function SaveAcc($username,$password,$passwordrepeat,$profil,$sprache=null,$id=null){
			if(!isset($id)){
				$accs = file('account.txt');
				$lastacc = end($accs);
				$lastarr = explode($lastacc);
				$id = $lastarr['0'] + 1;
			}
			$profilid = $profil->id;
			if(isset($id)){
				$spracheid = $sprache->id;
			}else{
				$spracheid = 2;
			}
			file_put_contents('accounts.txt',$id . ':' . $username . ':' . $password . ':' . $profilid . ':' . $spracheid . "\n",FILE_APPEND);
			return true;
		}

		public function CheckLogin($username,$password){
			$allaccs = file('account.txt');

			foreach($allaccs as $oneacc){
				$onearr = explode(':',$oneacc);
				$oneuser = $onearr['1'];
				$onepass = $onearr['2'];

				if($username == $oneuser && $password == $onepass){
					session_start();
					$_SESSION['id'] = $onearr['0'];
					$_SESSION['name'] = $username;
					return true;
				}
			}
			return false;
		}
	}

?>