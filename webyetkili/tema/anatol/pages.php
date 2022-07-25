<?php


// admin sayfaları buradan çekiliyor
if($_GET[page]=="sayfalar"){

	$adminsayfa = new adminSayfa();
	$sayfa =  $adminsayfa->adminTekveri($db,"include", $_GET['id']);
	include ($sayfa);


}
// ADMİN SAYFASI OLUŞTURMA
if ($_GET[page]=="adminsayfa") {

	switch ($_GET['git']) {
		case "form":
			include 'sayfa/admin/adminform.php';
			break;

		case "icerikForm":
			include 'sayfa/icerik/icerikForm.php';
			break;

		default:
			//include 'sayfa/admin/adminsayfa.php';
			break;
	}


}
// İçerik yönetimi SAYFASI OLUŞTURMA
else if($_GET[page]=="icerik"){


		switch ($_GET['git']) {

			case "icerikForm":
				include 'sayfa/icerik/icerikForm.php';
				break;

			default:
				//include 'sayfa/admin/adminsayfa.php';
			break;
		}

}
// SİTE yönetimi SAYFASI OLUŞTURMA
else if($_GET[page]=="siteyonetimi"){


	switch ($_GET['git']) {


		case "menuForm":
			include 'sayfa/siteyonetimi/menuForm.php';
			break;
			case "menuOlustur":
				include 'sayfa/siteyonetimi/menuOlustur.php';
				break;
				case "sliderForm":
				include 'sayfa/siteyonetimi/sliderForm.php';
				break;
			case "parcacikform":
				include 'sayfa/siteyonetimi/parcacikForm.php';
				break;


		default:
			//include 'sayfa/admin/adminsayfa.php';
			break;
	}

}

// Kullanıcılar Sayfası OLUŞTURMA
else if($_GET[page]=="kullanicilar"){


	switch ($_GET['git']) {


		case "uyeForm":
			include 'sayfa/kullanicilar/uyeForm.php';
			break;

			case "yoneticiForm":
			include 'sayfa/kullanicilar/yoneticiForm.php';
			break;

		case "userForm":
			include 'sayfa/kullanicilar/userForm.php';
			break;


		default:
			//include 'sayfa/admin/adminsayfa.php';
			break;
	}

}

// KURUMSAL  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Kurumsal"){


	switch ($_GET['git']) {


		case "yeniEkle":
			include 'sayfa/Kurumsal/yeniEkle.php';
			break;

		 case "Duzenle":
			include 'sayfa/Kurumsal/duzenle.php';
			break;

		 case "Fotograf":
			include 'sayfa/Kurumsal/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/Kurumsal/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/Kurumsal/fotoduzenle.php';
			break;

			 case "Dosya":
			include 'sayfa/Kurumsal/dosya.php';
			break;

			 case "yeniDosya":
			include 'sayfa/Kurumsal/yeniDosya.php';
			break;

			 case "DosyaDuzenle":
			include 'sayfa/Kurumsal/dosyaduzenle.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// Sss  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Sss"){


	switch ($_GET['git']) {


		case "yeniEkle":
			include 'sayfa/Sss/yeniEkle.php';
			break;

		 case "Duzenle":
			include 'sayfa/Sss/duzenle.php';
			break;

		 case "Fotograf":
			include 'sayfa/Sss/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/Sss/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/Sss/fotoduzenle.php';
			break;

			 case "Dosya":
			include 'sayfa/Sss/dosya.php';
			break;

			 case "yeniDosya":
			include 'sayfa/Sss/yeniDosya.php';
			break;

			 case "DosyaDuzenle":
			include 'sayfa/Sss/dosyaduzenle.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// Users  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Users"){


	switch ($_GET['git']) {


		case "yeniEkle":
			include 'sayfa/Users/yeniEkle.php';
			break;

		 case "Duzenle":
			include 'sayfa/Users/duzenle.php';
			break;

		 case "Fotograf":
			include 'sayfa/Users/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/Users/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/Users/fotoduzenle.php';
			break;

			 case "Dosya":
			include 'sayfa/Users/dosya.php';
			break;

			 case "yeniDosya":
			include 'sayfa/Users/yeniDosya.php';
			break;

			 case "DosyaDuzenle":
			include 'sayfa/Users/dosyaduzenle.php';
			break;


			 case "Bultenler":
			include 'sayfa/Users/bultenler.php';
			break;

			 case "bultenduzenle":
			include 'sayfa/Users/bultenduzenle.php';
			break;

			 case "mailgonderim":
			include 'sayfa/Users/mailgonderim.php';
			break;
			
			
			 case "Admin":
			include 'sayfa/Users/admin.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Urun  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Urun"){


	switch ($_GET['git']) {


		case "yeniEkle":
			include 'sayfa/slider/yeniEkle.php';
			break;

		 case "Duzenle":
			include 'sayfa/slider/duzenle.php';
			break;

		 case "Fotograf":
			include 'sayfa/slider/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/slider/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/slider/fotoduzenle.php';
			break;

			 case "Dosya":
			include 'sayfa/slider/dosya.php';
			break;

			 case "yeniDosya":
			include 'sayfa/slider/yeniDosya.php';
			break;

			 case "DosyaDuzenle":
			include 'sayfa/slider/dosyaduzenle.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Oneri Mesajları  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Oneri"){

	switch ($_GET['git']) {

		 case "Duzenle":
			include 'sayfa/Oneri/duzenle.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Ziyaretler  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Ziyaretler"){


	switch ($_GET['git']) {


		case "yeniEkle":
			include 'sayfa/Ziyaretler/yeniEkle.php';
			break;

		 case "Duzenle":
			include 'sayfa/Ziyaretler/duzenle.php';
			break;

		 case "Fotograf":
			include 'sayfa/Ziyaretler/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/Ziyaretler/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/Ziyaretler/fotoduzenle.php';
			break;


		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// slider  Sayfası OLUŞTURMA
else if($_GET[page]=="slider"){


	switch ($_GET['git']) {


		case "yeniEkle":
			include 'sayfa/slider/yeniEkle.php';
			break;

		 case "Duzenle":
			include 'sayfa/slider/duzenle.php';
			break;

		 case "Fotograf":
			include 'sayfa/slider/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/slider/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/slider/fotoduzenle.php';
			break;

			 case "Dosya":
			include 'sayfa/slider/dosya.php';
			break;

			 case "yeniDosya":
			include 'sayfa/slider/yeniDosya.php';
			break;

			 case "DosyaDuzenle":
			include 'sayfa/slider/dosyaduzenle.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// odalar  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Odalar"){


	switch ($_GET['git']) {


			case "yeniEkle":
			include 'sayfa/Odalar/yeniEkle.php';
			break;

		 	case "Duzenle":
			include 'sayfa/Odalar/duzenle.php';
			break;

		 	case "Fotograf":
			include 'sayfa/Odalar/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/Odalar/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/Odalar/fotoduzenle.php';
			break;

			 case "Dosya":
			include 'sayfa/Odalar/dosya.php';
			break;

			 case "yeniDosya":
			include 'sayfa/Odalar/yeniDosya.php';
			break;

			 case "DosyaDuzenle":
			include 'sayfa/Odalar/dosyaduzenle.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// odalar tipleri YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Odatipleri"){


	switch ($_GET['git']) {


			case "yeniEkle":
			include 'sayfa/Odatipleri/yeniEkle.php';
			break;

		 	case "Duzenle":
			include 'sayfa/Odatipleri/duzenle.php';
			break;

		 	case "Fotograf":
			include 'sayfa/Odatipleri/fotograf.php';
			break;

			 case "yeniFoto":
			include 'sayfa/Odatipleri/yeniFoto.php';
			break;

			 case "FotoDuzenle":
			include 'sayfa/Odatipleri/fotoduzenle.php';
			break;

			 case "Dosya":
			include 'sayfa/Odatipleri/dosya.php';
			break;

			 case "yeniDosya":
			include 'sayfa/Odatipleri/yeniDosya.php';
			break;

			 case "DosyaDuzenle":
			include 'sayfa/Odatipleri/dosyaduzenle.php';
			break;

		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}



