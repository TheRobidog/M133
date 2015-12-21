<?php
	include_once('model/warenkorb.php');
	include_once('controller/antiquitaetcontroller.php');
	include_once('controller/account.php');

	class WarenkorbController{
		public function __construct(){
			
		}

		public function GetOne($id){
			$cart = new Warenkorb();

			$safedcarts = file('carts.php');
			foreach($safedcarts as $safedcart){
				$cartarray = explode(':',$safedcart);
				if($id == $cartarray['0']){
					$cart->id = $cartarray['0'];
					$anti = new Antiquitaet();
					/*foreach($cartarray['1'] as $antiid){
						$newanti = $anti->ShowOne($antiid);
						$cart->antiquitaet[] = $newanti;
					}*/
					// Needs to be rewritten - Not an Array
					$antiarray = explode(';',$cartarray['1'])
					foreach($antiarray as $antiid){
						$newanti = $anti->ShowOne($antiid);
						$cart->antiquitaet[] = $newanti;
					}
					$cart->price = $cartarray['2'];
					$acc = new Account();
					$cart->account = $acc->GetById($cartarray['3']);
				}
			}
			return $cart;
		}

		public function SaveOne($anti,$price,$acc,$id=null){
			if(!isset($id)){
				$safedcarts = file('carts.php');
				$lastentry = end($safedcarts);
				$id = $lastentry['0'] + 1;
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
			file_put_contents('carts.php',$id . ':' . $antistring . ':' . $price . ':' $accid . "\n",FILE_APPEND);
		}
	}

?>