<?php ob_start();
include '../config.php';
include '../lib/lib.php';
include '../class/class.php';

global $db;

$adminsayfa = new adminSayfa();
$icerikClasi = new icerik();
// Gelen Formlar burada dönecek
 if($_GET[formadi]=="adminForm"){

 	if ($_POST[adi]=="") {
 		hata("sayfa adı Giriniz");
 	}else{
 		$adminsayfa->adminOlustur($db,$_POST);


 	}
 }
/// ADMİN SAYFA GÜNCELLEME
 elseif ($_GET['formadi']=="adminFormGuncelle"){
 	if($adminsayfa->adminTekveri($db,"codeID", $_GET['id'])){
 		unset($_POST['codeID']);

 	}

 	print_r($_POST);
 	$adminsayfa->adminGuncelle($db,$_POST, $_GET['id']);




 }
//////  içerik sayfası oluştıurma
 elseif ($_GET['formadi']=="icerikForm"){
 	$menu = new veriTabani();
 	$menu->tabloadi="sayfa";
 	 print_r($_POST);
 	$menu->olustur($_POST);
 	header("location: $_SERVER[HTTP_REFERER]");
 }

// İçerik sayfası güncelleme
 elseif ($_GET['formadi']=="icerikSayfaGuncelle"){
 	$menu = new veriTabani();
 	$menu->tabloadi="sayfa";
 	unset($_POST['codeID']);
 	 print_r($_POST);
 	echo "güncellendi";
 	$menu->guncelle($_POST,  $_GET['id']);
 	echo "gelen id :".$_GET['id'];
 	header("location: $_SERVER[HTTP_REFERER]");

 }

//////  Menu  oluşturma
 elseif ($_GET['formadi']=="menuformmEkle"){
 	$menu = new veriTabani();
 	$menu->tabloadi="menuAdi";

 	$menu->olustur($_POST);

 }

// Menü güncelleme
 elseif ($_GET['formadi']=="menuformmGuncelle"){
 	$menu = new veriTabani();
 	$menu->tabloadi="menuAdi";
 	unset($_POST['codeID']);

 	if($menu->guncelle($_POST,  $_GET['id'])){

 		echo "1";
 	}



 }


 ///Slider Ekleme
 elseif ($_GET['formadi']=="sliderForm"){

 	if ($_POST['adi']==""){
 			hata("Slider adı giriniz"); 		}

 	else{
 	$slider = new veriTabani();
 	$slider->tabloadi="slider";

 	$slider->olustur($_POST);
 	}

 }
 //Slider güncelleme
 elseif ($_GET['formadi']=="sliderFormGuncelle"){
 	$slider = new veriTabani();
 	$slider->tabloadi="slider";
 	unset($_POST['codeID']);
 	print_r($_POST);
 	$slider->guncelle($_POST,  $_GET['id']);

 }

//Parcacik güncelleme
 elseif ($_GET['formadi']=="parcacikFormGuncelle"){
 	$slider = new veriTabani();
 	$slider->tabloadi="sayfaparcacik";

 	print_r($_POST);
 	$slider->guncelle($_POST,  $_GET['id']);

 }
 //Genel Ayarlar güncelleme
 elseif ($_GET['formadi']=="genelayarlarGuncelle"){
 	$genelayarlar = new veriTabani();
 	$genelayarlar->tabloadi="genelayarlar";
 	echo  $_GET['id'];
 	print_r($_POST);
 $genelayarlar->guncelle($_POST,  $_GET['id']);

 }

//Mail Güncelleme
 elseif ($_GET['formadi']=="mailayariGuncelle"){
 	 $mailayarlari = new veriTabani();
 	 $mailayarlari->tabloadi="mailayarlari";
 	//echo  $_GET['id'];
 //	print_r($_POST);
 $mailayarlari->guncelle($_POST,  $_GET['id']) ;

 }
 //Google Güncelleme
 elseif ($_GET['formadi']=="googleayariGuncelle"){
 	 $mailayarlari = new veriTabani();
 	 $mailayarlari->tabloadi="googleayarlari";
 	//echo  $_GET['id'];
 	//print_r($_POST);
	 if($mailayarlari->guncelle($_POST,  $_GET['id'])){
		 echo 1;
	 }

 }
  //Dil Güncelleme
 elseif ($_GET['formadi']=="dilayariGuncelle"){
 	 $dilayarlari = new veriTabani();
 	 $dilayarlari->tabloadi="genelayarlar";
 	//echo  $_GET['id'];
 	//print_r($_POST);
	 if($mailayarlari->guncelle($_POST,  $_GET['id'])){
		 echo 1;
	 }

 }

 //Sosyal Medya-Link Güncelleme
 elseif ($_GET['formadi']=="sosyalayariGuncelle"){
 	 $sosyalayarlar = new veriTabani();
 	 $sosyalayarlar->tabloadi="sosyalayarlar";
 	//echo  $_GET['id'];
    //print_r($_POST);
	 if($sosyalayarlar->guncelle($_POST,  $_GET['id'])){
		 echo 1;
	 }

 }

///Uye Güncelleme
 elseif ($_GET['formadi']=="uyeGuncelle"){
 	 $uyeayarlari = new veriTabani();
 	 $uyeayarlari->tabloadi="uyeler";
 	//echo  $_GET['id'];
    //print_r($_POST);
	 if($uyeayarlari->guncelle($_POST,  $_GET['id'])){
		 echo 1;
	 }

 }
//////  Uye oluşturma
 elseif ($_GET['formadi']=="uyeForm"){
 	$uyekle = new veriTabani();
 	$uyekle->tabloadi="uyeler";
 	//echo  $_GET['id'];
   // print_r($_POST);
 	$uyekle->olustur($_POST);

 }
 ///UserGroup Güncelleme
 elseif ($_GET['formadi']=="userGuncelle"){
 	 $userayarlari = new veriTabani();
 	 $userayarlari->tabloadi="usergroup";
 	//echo  $_GET['id'];
   print_r($_POST);
if($userayarlari->guncelle($_POST, $_GET['id'])){
	 echo 1;
	}

 }
//// UserGroup Oluşturma
 elseif ($_GET['formadi']=="userForm"){
 	$userekle = new veriTabani();
 	$userekle->tabloadi="usergroup";
 	//echo  $_GET['id'];
   // print_r($_POST);
 	$userekle->olustur($_POST);
 }
 /// Seo Kelime
 elseif ($_GET['formadi']=="seokelime"){
 	 $kelime = seolink($_POST['seo']);

 $seos=  $icerikClasi->sor("select * from sayfa where seokelime='$kelime' ");

		if(mysql_affected_rows()){

			   echo $kelime;

		}else {
			echo $kelime;
		}

 }

 elseif ($_GET['formadi']=="siteformmEkle"){
 	$menu = new veriTabani();
 	$menu->tabloadi="menuAdi";

 	$menu->olustur($_POST);

 }
 elseif ($_GET['formadi']=="siteformmGuncelle"){
 	$menu = new veriTabani();
 	$menu->tabloadi="menuAdi";
 	unset($_POST['codeID']);
 	$menu->guncelle($_POST, $_GET['id']);
 	echo $_GET['id'];
 }


 /// MENU EKLE
  elseif ($_GET['formadi']=="menuEkle"){
 	$menu = new veriTabani();
 	$menu->tabloadi="menu_kategori";
 	if($_POST[linkadi]==""){

	 	echo "3";
 	}else{

	 	$menu->olustur($_POST);
 	}

 }

 // Menu Listesi Güncellleme siteyönetimi  / Mneü yönetimi /
  elseif ($_GET['formadi']=="menubuttonguncelle"){

  	$menu = new veriTabani();
 	$menu->tabloadi="menu_kategori";

 	//print_r($_POST);

 	$menu->guncelle($_POST, $_GET['id']);
 	//echo "id no :".$_GET['id'];

  }

  /// Menu Sira Oluşturma
   elseif ($_GET['formadi']=="menusira"){
 	$menu = new veriTabani();
 	$menu->tabloadi="menuAdi";

 			$cikis = array();
 		$list = parse_str($_POST['list'],$cikis);
 		 $cikis;

 		echo $datalar = implode(",", $cikis['list']);
 				$data = array(

 					"sira"=>$datalar

 				);


 		$menu->guncelle($data,$_GET[mid]);

 }



//// DOSYA KATEGORİ  Oluşturma
 elseif ($_GET['formadi']=="dosyaKategoriOlustur"){
 	$userekle = new veriTabani();
 	$userekle->tabloadi="dosya_kategori";
 	//echo  $_GET['id'];
  // print_r($_POST);

 	if($_POST['adi']==""){
	 	echo "2";
 	}else{

	 $userekle->olustur($_POST);
 	}


 }

 //// DOSYA KATEGORİ  Oluşturma
 elseif ($_GET['formadi']=="dosyakategorisirala"){
 	$siralama = new veriTabani();
 	$siralama->tabloadi="siralama";
 	//echo  $_GET['id'];
 			$cikim = array();
 	echo $listem =  parse_str($_POST['list'],$cikim);
 			//$cikim['list']);

 		echo $birles = implode(",", $cikim['list']);

 		//$sabitVeri = $siralama->sabitVeri();

 	}




 /// Ürün EKLE
  elseif ($_GET['formadi']=="urunEkle"){
 	$menu = new veriTabani();
 	$menu->tabloadi="urunler";

 		print_r($_POST);

 		 $menu->olustur($_POST);

 }



 // DOSYA FORM GÜNCELLE  /
  elseif ($_GET['formadi']=="dosyaForm"){

  	$dosya = new veriTabani();
 	$dosya->tabloadi="dosya";

 	//print_r($_POST);

 	$dosya->guncelle($_POST, $_GET['id']);
 	//echo "id no :".$_GET['id'];

  }

  // DOSYA YÜKLENEN DOSYAYI YENİDE BOYUTLAMNDURMA  /
  elseif ($_GET['formadi']=="dosyaBoyut"){

  	$dosya = new veriTabani();
 	$dosya->tabloadi="dosya";

 	$genelayarlar = new veriTabani();
 	$genelayarlar->tabloadi="genelayarlar";

 	$dosyayukleclass = new dosyaYonetimi();


 	if($_POST[genislik]==""){

	 	echo "3";
 	}
 	else if (! is_numeric($_POST[genislik])){

	 	echo "2";
 	}

 	else{
 	print_r($_POST);
 		 $site = $genelayarlar -> sabitVeri("siteadresi");
  	$dosuaUrl = $dosya->tekveri("url",$_POST['dosyaid']);

 			//$dosyayukleclass ->dosyaBoyut("",150,150);


 			echo '<img   src="'.$dosyayukleclass->dosyaBoyut($dosuaUrl,$_POST['genislik'],$_POST['yukseklik']).'" />

 			<div id="row"><a class="iliskile" href="#">İlişkile </a></div>
 			';

 		}
 	//$dosya->guncelle($_POST, $_GET['id']);
 	//echo "id no :".$_GET['id'];

  }

 /*

	 BURASI GET İŞLEMLERİ VERİ ÇEKME

 */

 /// İLİŞİKİLİ DOYSA EKLE
 elseif($_GET['formid']=="dosyaIliskile"){

$_POST['id'];

		$diliskile = new veriTabani();
		$diliskile -> tabloadi = "iliskili_resim";

		$fotoclass = new veriTabani();
		$fotoclass -> tabloadi = "dosya";
		echo print_r($_POST);



		$diliskile -> olustur($_POST);

		$sor= $diliskile ->sorgu2("select * from iliskili_resim  where codeID='$_POST[codeID]'  ");


			foreach($sor as $srow){

				$resim = $fotoclass->tekveri("url",$srow['fotoid']);
				echo '<img width="150" src="'.$resim.'" > <a id="'.$srow['id'].'" class="iliskiliSil" href="#">sil</a>';
			}



 }



 /// DOSYA POPUP ÇEKME
 elseif ($_GET['formadi']=="dosyaKatListele"){




 		$dosyKategori = new veriTabani();
 		$dosyKategori -> tabloadi="dosya_kategori";

 		$dosyam = new veriTabani();
 		$dosyam -> tabloadi="dosya";

 		$kadi = $dosyKategori ->tekveri("adi",$_POST['id']);

 		$dosyListele = $dosyam -> sorgu("select * from dosya where kid=$_POST[id]");

 		echo '<h2>'.$kadi.' </h2>



 		';

 		foreach($dosyListele as $dosyaValue){

	 		echo '	<div id="'.$dosyaValue['id'].'" class="fotoDiv">
	 					<img  id="'.$dosyaValue['id'].'" width="150" src="'.$dosyaValue['url'].'" alt="..." class="img-thumbnail ">

	 					<div class="kontrol" > <a id=" '. $dosyaValue['id'] .' " class="dosyaBoyut" href="#" > Ekle</a>| | <a id="'.$dosyaValue['id'].'" href="#" class="boyut iliskile"> ilşkle	</a> </div>


	 				</div>


	 				';
 		}



  }



 /// --> MenÜ DÜZENLE İŞLEMLERİ javascripten geliyor
 elseif ($_GET['formadi']=="mDuzenle"){
 	$mkat = new veriTabani();
 	$mkat -> tabloadi="menu_kategori";
 	$st = new veriTabani();
 	$st->tabloadi="sayfatipi";


$sayfaid = $mkat->tekveri("sayfaid",$_POST[id]);
$stipi = $mkat->tekveri("sayfatipi",$_POST[id]);

echo $tipadi = $st->tekveri("link",$stipi);

		echo '<div class="col-sm-6">
                           <label> Link Adı </label>
                           <input type="text" value="'.$mkat->tekveri("linkadi",$_POST[id]).'" class="form-control tooltips" name="linkadi" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Galeri İsmi" data-original-title="Galeri İsmi">
                            </div>
                          <div class="col-sm-6">
                            <label> Link Açıklaması </label>
                            <input type="text" class="form-control tooltips" name="linkaciklama" data-trigger="hover" value="'.$mkat->tekveri("linkaciklama",$_POST[id]).'" data-toggle="tooltip" title="" placeholder="Galeri İsmi" data-original-title="Galeri İsmi">
                          </div>
                             <div class="col-sm-6 bosluk">

                      <select name="sayfatipi" id="sayfalar"  class="col-md-2 form-control input-sm m-bot15">
                                 <option selected value="">Lütfen Seçiniz</option>';


                               			$stcek = $mkat->sorgu("select * from sayfatipi");
                               			foreach($stcek as $stvalue){
                               					if($stvalue['id']==$stipi){
	                               					$select = "selected";
                               					}

                               					else{

	                               					$select = false;


                               					}
	                               			echo '  <option '.$select.' value="'.$stvalue['id'].'">'.$stvalue['adi'].' </option>';
                               			}



                              echo '
                            </select>

                        </div>
                        <div id="veri">

	                        <!-- BURAYA VERİLER GELCEEK -->

	                       ';

	                   if($tipadi=='link'){  /// SAYFA DA LİNK VARSA
	                   	echo '<div class="col-sm-6">

                         <input type="text" value="'.$mkat->tekveri("link",$_POST[id]).'" name="link" class="m-bot15 col-md-2 form-control tooltips" placeholder="Harici Link">
                            </div>';
	                   	}else{// LİNK YOKSA SAYFALAR LİSTELENİYOR
	                       echo ' <div class="col-sm-6 bosluk">

                      <select name="sayfaid" class="col-md-2 form-control input-sm m-bot15">
	                        ';

	                      $scek = $mkat->sorgu("select * from sayfa where tip=$stipi");

	                      foreach($scek as $scValue){

                              echo '  <option value="'.$scValue['id'].'">'.$scValue['baslik'].'</option>';
				 	}

                       echo '</select>

                        	</div>';

                        	}


                        echo ' </div>

                        <input  type="hidden" name="menuid" value="'.$mkat->tekveri("menuid",$_POST[id]).'">
                       <div class="col-sm-12 bosluk"> <a id="'.$mkat->tekveri("id",$_POST[id]).'" class="btn btn-warning btn-lg menubuttonguncelle" type="button">Gönder</a></div>

                        </div>';



 }


 /// SELECT  MENU Listele
 elseif ($_GET['formadi']=="menulistele"){
 	$sqls = new veriTabani;
 	$sqls -> tabloadi="sayfatipi";

 	echo $cektip = $sqls->tekveri("link",$_POST[sayfa]);

	$syf = new veriTabani();
	$syf-> tabloadi="sayfa";

	 	if($cektip==""){


				 	$syfcek = $syf->sorgu("select * from sayfa where tip=$_POST[sayfa]");
				 	echo '<div class="col-sm-6 bosluk">

                      <select name="sayfaid" class="col-md-2 form-control input-sm m-bot15">';
				 	foreach($syfcek as $syfValue){

                              echo '  <option  value="'.$syfValue['id'].'">'.$syfValue['baslik'].'</option>';
				 	}

				 	echo '  </select>

                        </div>';
	 	}

	 	elseif($cektip=='link'){
		 	echo '<div class="col-sm-6">

                         <input type="text" name="link" class="m-bot15 col-md-2 form-control tooltips" placeholder="Harici Link">
                            </div>';
	 	}else{


	 	}

	 	//print_r($_POST);
 }
