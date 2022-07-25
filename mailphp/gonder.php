<title>Varauspöytä</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("class.phpmailer.php"); // PHPMailer dosyamizi çagiriyoruz


$mail = new PHPMailer(); // Sinifimizi $mail degiskenine atadik
$mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
$mail->From     = "noreply@aikatalohostel.fi";//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
$mail->Sender   = "noreply@aikatalohostel.fi";//"admin@localhost";//Gönderen Mail adresi
//$mail->ReplyTo  = ($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->AddReplyTo=("noreply@aikatalohostel.fi");//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->FromName = "noreply@aikatalohostel.fi";//"PHP Mailer";//gönderenin ismi
$mail->Host     = "mail.aikatalohostel.fi
";//"localhost"; //SMTP server adresi
$mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
$mail->SMTPSecure = "tls";
$mail->Port     = 465; //Natro SMPT Mail Portu
$mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
$mail->Username = "noreply@aikatalohostel.fi";//"admin@localhost"; //SMTP kullanici adi
$mail->Password = "782246Koc.";//""; //SMTP mailinizin sifresi
$mail->WordWrap = 50;
$mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
$mail->Subject  = "noreply"; //$_POST["konu"]." /PHP SMTP Ayarları/Mail Konusu";//"Deneme Maili"; // $body  = "						"."Mail İçeriği Başlığı"."<br><br>";
$body = "Viestisi on hyväksytty. Viestisi on alla. Kiitos"."<br>";
$body .= "Nimi						: ".$_POST["name"]."<br>";
$body .= "Sähköposti				: ".$_POST["email"]."<br>";
$body .= "Puhelinnumerosi&nbsp;&nbsp: ".$_POST["phone"]."<br>";
$body .= "Päivämäärä 				: ".$_POST["date"]."-"."".$_POST["time"]."<br>";
$body .= "Viesti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["mesaj"]."<br>";
$textBody = $body;//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
$mail->Body = $body;
$mail->AltBody = $text_body;


$mail->ClearAddresses();
$mail->ClearAttachments();
$mail->AddAttachment('images.png'); //mail içinde resim göndermek için
//$mail->addCC('mailadi@alanadiniz.site');// cc email adresi
//$mail->addBCC('mailadi@alanadiniz.site');// bcc email adresi
//$mail->AddAddress("ikoc4562@gmail.com"); // Mail gönderilecek adresleri ekliyoruz.
	
	if(!empty($_POST["ispost"])){

	//$mail->AddAddress($result["uname"]);
	$mail->AddAddress($_POST["email"]);
	$mail->Send();
	$mail->ClearAddresses();
	$mail->ClearAttachments();

	}
		
		
	

?>	
