  <?php
  include('../taglar.php');
  if ($_POST['islem'] == "gonder"){
	  echo $_POST['baslik'];
  	$baslik = str_replace("","",$_POST['baslik2']);
  	$baslik = str_replace("'","`",$baslik);

  	$icerik = str_replace("","",$_POST['icerik']);
  	$icerik = str_replace("'","`",$icerik);

  	foreach ($_POST['sayfa'] as $sayfam){

  		$sayfadeger .= $sayfam.",";

  	}

  	$sql = $db->query("INSERT INTO bulten (sayfa,baslik,icerik,tarih) VALUES ('".$sayfadeger."','".$baslik."','".$icerik."','".$_POST['tarih']."')");

	
	require_once('../class.phpmailer.php');
	require_once('../ayarlar.php');
	
	
	$mailadres = $_POST["email"];
	
 	// Kullanıcılar listeleniyor.
	/*
	$sayfadeger2 = "";
	$index = 0;
	foreach ($_POST['sayfa'] as $sayfam){
		if($index == 0){$sayfadeger2 .= " sayfa like '%".$sayfam."%'"; $index = 1;}
		else $sayfadeger2 .= " OR sayfa like '%". $sayfam."%'";
	}
*/
	//$of2 = substr($sayfadeger2,0,strlen($sayfadeger2)-1);
	$uyealx = $db->query("SELECT * FROM users WHERE aktif = 1 and sayfa=5 order by id DESC");
		//$uyealx = $db->prepare("SELECT * FROM users WHERE aktif = 1 and (:val)  order by id DESC");
	$uyealx->execute();

	//echo $sayfadeger2;
	$gonderilemeyenler = "";
	$gonderilenler = "";
	$variable = $uyealx->fetchAll();
	foreach ($variable as $cekx) {
		# code...
	//while($cekx = mysql_fetch_assoc($uyealx)){
	
			
		$mailadres = $_POST["email"];
		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
		$mail->IsSMTP();
		/*---------*/
		/*
		$mail->SMTPDebug = 2;
		$mail->SetLanguage( 'tr', 'phpmailer/language/' );
		*/
		/*---------*/
		$mail->Host = $mailhost;
		$mail->SMTPAuth = true;
		$mail->IsHTML(true);
		$mail->Username = $mailkullanici;
		$mail->Password = $mailsifre;
		$mail->From = $gonderilecekadres;
		$mail->Fromname = "HGM-Web Sitesi";
		$mail->Subject = "".$_POST['baslik2'];
		$mail->AddBCC($cekx['email']);
				
		$mesaj = ''.$_POST['icerik'].' <br />
		<u>Lütfen bu maili cevaplamayınız.</u><br />
		<a href="http://www.hgk.msb.gov.tr/mailcikar" style="font-family:Arial; font-size:10px;"><u>Harita Genel Müdürlüğü`ndan e-Posta almak istemiyorsanız lütfen tıklayın.</u></a>
		';
		$mail->Body = $mesaj;
		$mail->IsHTML(true);  /* <== call IsHTML() after $mail->Body has been set. */
		//$mail->AddAddress(trim($cekx['email']));
		if(!$mail->Send())
		{
			$gonderilemeyenler .= trim($cekx['email']) . ' Oluşan Sorun = <font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font><br />';
		}
		sleep(1);
	}
	if($gonderilemeyenler != "") echo '<script>alert("'.$gonderilemeyenler.'");</script>';
	else{
		echo '<script>alert("Bülten Başarıyla Gönderildi. '.$gonderilenler.'");</script>';
		echo '<script>alert("Bülten Başarıyla Gönderildi. '.$_POST['baslik2'].'");</script>';
	}


	$mail->ClearAddresses();
	$mail->ClearAttachments();
}
?>


<div class="wrapper">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Bülten Gönderimi</h3>
		</div>
		<div class="panel-body">

			<div id="tabs">



				<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">



					<div class="col-sm-12">
						<strong>Dikkat:</strong> Gönder butonuna bastıktan sonra &quot;Başarıyla gönderildi&quot; ibaresini görmeden sayfayı kapatmayınız. E-posta sayısına göre gönderim süresi değişecektir. </div>

						<div class="square-green single-row">
							<br /><br />
							<div class="checkbox "><label><strong>Haber Grubu</strong></label>&nbsp;<br />
								Jeodezi
								<input name="sayfa[]" type="checkbox" id="sayfa[]" value="1"/>
								Fotogrametri
								<input name="sayfa[]" type="checkbox" id="sayfa[]" value="2"/>
								Kartografya
								<input name="sayfa[]" type="checkbox" id="sayfa[]" value="3"/>
								Coğrafi Bilgi Sistemleri
								<input name="sayfa[]" type="checkbox" id="sayfa[]" value="4"/>
								Genel
								<input name="sayfa[]" type="checkbox" id="sayfa[]" value="5"/>
								Özel Grubumuz
								<input name="sayfa[]" type="checkbox" id="sayfa[]" value="6"/>
							</div>
						</div>


						<div class="col-sm-12">
							<label> Başlık</label><input type="text" name="baslik2" id="baslik" value="" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
						</div>

						<div class="col-sm-12">
							<label>İçerik</label>
							<textarea name="icerik" class="ckeditor"></textarea></div>

							<div class="col-sm-12">
								<input name="islem" type="hidden" id="islem" value="gonder" />
								<input name="tarih" type="hidden" value="<?=Date("Y-m-d")?>" />
								<input type="submit" name="button" id="button" value="Gönder" class="btn btn-warning btn-lg"/>
							</div>

						</form>
					</div>
				</div>
			</div>

			<script type="text/javascript" charset="utf-8">
				(function(){
					var tabs =document.getElementById('tabs');
					var nav = tabs.getElementsByTagName('input');

      /*
      * Hide all tabs
      */
      function hideTabs(){
      	var tab = tabs.getElementsByTagName('div');
      	for(i in tab){
      		if(tab[i].className == 'dil'){
      			tab[i].className = tab[i].className + ' hide';
      		}
      	}  
      }

      /*
      * Show the clicked tab
      */
      function showTab(tab){
      	hideTabs();
      	document.getElementById(tab).className = document.getElementById(tab).className.replace('hide', '');
      }

      hideTabs(); /* hide tabs on load */

      /*
      * Add click events
      */
      for(i in nav){
      	nav[i].onclick = function(){
      		showTab(this.className);
      	}
      }
  })();
</script>
