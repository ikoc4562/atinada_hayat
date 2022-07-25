<?php ob_start();

include '../config.php';
include '../lib/lib.php';
include '../class/class.php';

			$mail = $_POST[eposta];
			$sifre = $_POST[sifre];
			$sifre = hash('sha256', $sifre);
			$uyesor = $db->prepare("SELECT eposta,sifre FROM  uyeler where eposta=:mail and sifre=:sifre");
			$uyesor->execute(['mail'=>$mail,'sifre'=>$sifre]);

		if($uyesor->rowCount() > 0){

			echo 1;
			//header("location:$_SERVER[HTTP_REQUEST]");



		}else{

			echo "Ei käyttäjänimesi!";
		}


 ?>
