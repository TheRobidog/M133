<?php
	include_once('model/warenkorb.php');
	include_once('controller/antiquitaetcontroller.php');
	include_once('model/antiquitaet.php');
	include_once('controller/accountcontroller.php');
	include_once('model/account.php');

	class WarenkorbController{
		public function __construct(){
			
		}

		public function GetOne($id){
			$cart = new Warenkorb();

			$safedcarts = file('carts.php');
			foreach($safedcarts as $safedcart){
				$cartarray = explode(':',$safedcart);
				if($id == $cartarray['0']){
					$cart->setId($cartarray['0']);
					$anti = new AntiquitaetController();
					$antiarray = explode(';',$cartarray['1'])
					foreach($antiarray as $antiid){
						$newanti = $anti->ShowOne($antiid);
						$cart->setAntiquitaet($newanti);
					}
					$cart->setPrice($cartarray['2']);
					$acc = new AccountController();
					$cart->setAccount($acc->LoadAcc($cartarray['3']));
					return $cart;
				}
			}
			return false;
		}

		public function SaveOne($anti,$price,$acc,$id=null){
			if(!isset($id)){
				$safedcarts = file('carts.php');
				$lastentry = end($safedcarts);
				$lastarray = explode(':',$lastentry)
				$id = $lastarray['0'] + 1;
			}
			$antistring;
			foreach($anti as $ant){
				$newid = $ant->id;
				if($antistring == ""){
					$antistring = $newid;
				}else{
					$antistring = $antistring . ';' . $newid;
				}
			}
			$accid = $acc->id
			file_put_contents('carts.txt',$id . ':' . $antistring . ':' . $price . ':' $accid . "\n",FILE_APPEND);
			return true;
		}
	}

?>