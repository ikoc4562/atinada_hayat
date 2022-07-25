<?php
include '../config.php';
include '../lib/lib.php';
include '../class/class.php';

global $db;

// admin Tablo sil
if ($_GET['sil']=='adminTablo') {
	$sil = new adminSayfa();
	$sil->adminSil($db,$_POST['tabloid']);

}

elseif ($_GET['sil']=="icerikSil"){

	$isil = new icerik();
	$isil->sil($_POST[tabloid]);

}
//// SİTE yönetimi  menu sil
elseif ($_GET['sil']=="sitemenuSil"){

	$msil = new veriTabani();
	$msil->tabloadi="menuAdi";
	$msil->sil($_POST[tabloid]);

}
//// Slider sil
elseif ($_GET['sil']=="sliderTablo"){

	$slidersil = new veriTabani();
	$slidersil->tabloadi="slider";
	$slidersil->sil($_POST[tabloid]);

}
//// parcacık sil
elseif ($_GET['sil']=="parcaciksil"){

	$parcaciksil = new veriTabani();
	$parcaciksil->tabloadi="sayfaparcacik";
	$parcaciksil->sil($_POST[tabloid]);

}
//// uye sil
elseif ($_GET['sil']=="uyesil"){

	$uyesil = new veriTabani();
	$uyesil->tabloadi="uyeler";
	$uyesil->sil($_POST[tabloid]);

}
//// Kullanıcı Grup sil
elseif ($_GET['sil']=="usersil"){

	$usersil = new veriTabani();
	$usersil->tabloadi="usergroup";
	$usersil->sil($_POST[tabloid]);

}

//// Alt Menu  sil
elseif ($_GET['sil']=="altMenuSil"){

	$usersil = new veriTabani();
	$usersil->tabloadi="menu_kategori";
	$usersil->sil($_POST[tablolarid]);
	//echo "asdas".$_POST[tablolarid];
}

////DOSYA KATEGORİ  sil
elseif ($_GET['sil']=="dosyaKategoriSil"){

	$usersil = new veriTabani();
	$usersil->tabloadi="dosya_kategori";
	$usersil->sil($_POST[tabloid]);
	//echo "asdas".$_POST[tablolarid];
}

////Fotoğraf sil yada dosya sil
elseif ($_GET['sil']=="dosyaSil"){

	$dosya = new veriTabani();
	$dosya->tabloadi="dosya";
	$resim = $dosya->tekveri("url",$_POST[tabloid]);




			echo"$resim";

			unlink("../".$resim);

			$dosya->sil($_POST[tabloid]);


					//$dosya->sil($_POST[tabloid]);
	//echo "asdas".$_POST[tablolarid];
}
