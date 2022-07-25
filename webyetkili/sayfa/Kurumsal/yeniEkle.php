<?php
// menu sayilari aliniyor.
$kac = $db->query("SELECT * FROM kurumsal");
$say = $kac->rowCount();
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "kurumsalekle"){


if($hata == ""){

if ($_FILES["fotograf"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);



}

if ($_FILES["fotograf2"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf2"]["tmp_name"];
			$resim1		= $_FILES["fotograf2"]["name"];
			$rtipi1		= $_FILES["fotograf2"]["type"];
			$rboyut1	= $_FILES["fotograf2"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim2 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim2);



}

if ($_FILES["fotograf3"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf3"]["tmp_name"];
			$resim1		= $_FILES["fotograf3"]["name"];
			$rtipi1		= $_FILES["fotograf3"]["type"];
			$rboyut1	= $_FILES["fotograf3"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim3 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim3);



}

if ($_FILES["fotograf4"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf4"]["tmp_name"];
			$resim1		= $_FILES["fotograf4"]["name"];
			$rtipi1		= $_FILES["fotograf4"]["type"];
			$rboyut1	= $_FILES["fotograf4"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim4 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim4);



}

if ($_FILES["fotograf5"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf5"]["tmp_name"];
			$resim1		= $_FILES["fotograf5"]["name"];
			$rtipi1		= $_FILES["fotograf5"]["type"];
			$rboyut1	= $_FILES["fotograf5"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim5 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim5);



}

if ($_FILES["fotograf6"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf6"]["tmp_name"];
			$resim1		= $_FILES["fotograf6"]["name"];
			$rtipi1		= $_FILES["fotograf6"]["type"];
			$rboyut1	= $_FILES["fotograf6"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim6 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim6);



}

if ($_FILES["fotograf7"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf7"]["tmp_name"];
			$resim1		= $_FILES["fotograf7"]["name"];
			$rtipi1		= $_FILES["fotograf7"]["type"];
			$rboyut1	= $_FILES["fotograf7"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim7 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim7);



}

if ($_FILES["fotograf8"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf8"]["tmp_name"];
			$resim1		= $_FILES["fotograf8"]["name"];
			$rtipi1		= $_FILES["fotograf8"]["type"];
			$rboyut1	= $_FILES["fotograf8"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim8 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim8);

}

if ($_FILES["fotograf9"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf9"]["tmp_name"];
			$resim1		= $_FILES["fotograf9"]["name"];
			$rtipi1		= $_FILES["fotograf9"]["type"];
			$rboyut1	= $_FILES["fotograf9"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim9 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim9);

}

if ($_FILES["fotograf10"]["name"] != ""){
$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf10"]["tmp_name"];
			$resim1		= $_FILES["fotograf10"]["name"];
			$rtipi1		= $_FILES["fotograf10"]["type"];
			$rboyut1	= $_FILES["fotograf10"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim10 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim10);

}

$baslik = str_replace("","",$_POST['baslik']);
$baslik = str_replace("'","`",$baslik);

$baslik_eng = str_replace("","",$_POST['baslik_eng']);
$baslik_eng = str_replace("'","`",$baslik_eng);

$icerik = str_replace("","",$_POST['icerik']);
$icerik = str_replace("'","`",$icerik);

$icerik_eng = str_replace("","",$_POST['icerik_eng']);
$icerik_eng = str_replace("'","`",$icerik_eng);

$ozet = str_replace("","",$_POST['ozet']);
$ozet = str_replace("'","`",$ozet);

$ozet_eng = str_replace("","",$_POST['ozet_eng']);
$ozet_eng = str_replace("'","`",$ozet_eng);

$anasayfa = $_POST['anasayfa'];
if($anasayfa == ""){
	$anasayfa = 0;
}

$target = $_POST['target'];
if($target == ""){
	$target = 0;
}

$ilk = $_POST['ilk'];
if($ilk == ""){
	$ilk = 0;
}

$kat = $_POST['kat'];
if($kat == ""){
	$kat = 0;
}

$aktif = $_POST['aktif'];
if($aktif == ""){
	$aktif = 0;
}
$sql = $db->query("INSERT INTO kurumsal (baslik,kat,yonlendir,target,icerik,include1,include2,include3,aktif,anasayfa,sira,baslik_eng,icerik_eng,yonlendir_eng,ilk,fotograf,fotograf2,fotograf3,fotograf4,fotograf5,fotograf6,fotograf7,fotograf8,fotograf9,fotograf10,gosterim) VALUES ('".$baslik."','".$kat."','".$_POST['yonlendir']."','".$target."','".$icerik."','".$_POST['include1']."','".$_POST['include2']."','".$_POST['include3']."','".$aktif."','".$anasayfa."','".$sonsayi."','".$baslik_eng."','".$icerik_eng."','".$_POST['yonlendir_eng']."','".$ilk."','".$resim."','','','','','','','','','',0)");

$mesaj = 'başarılı';
} if($hata != ""){
	hata($hata);
 }?>


<?php }?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Yeni Veri Başarıyla Kaydedildi!
</div>
<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Yeni Ekle</h3>
                        </div>
                        <div class="panel-body">

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">


   <div id="tabs">
    <div id="nav">
     <div class="col-sm-12">
    <label> İngilizce Giriş</label> <input type="radio" name="dil" value="1" class="div2" /> <?=$dil2?>
</div>
     </div>


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

  <div id="div2" class="dil">
   <div class="col-sm-12">
  <label><font color="red">Başlık İngilizce</font></label>
  <input type="text" name="baslik_eng" id="baslik_eng" value="<?=$_POST['baslik_eng']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>


 <div class="col-sm-12">
  <label><font color="red">Yönlendir (URL)</font></label>
  <input type="text" name="yonlendir_eng" id="yonlendir_eng" value="<?=$_POST['yonlendir_eng']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
<label><font color="red">İçerik İngilizce</font></label>
 <textarea name="icerik_eng" class="ckeditor"></textarea>  </div>



</div>


<div class="col-sm-12">
<label> Üst Kategori</label>
<select class="form-control m-bot15" name="kat" id="kat">
		                    <option value="0" selected="selected">Ana Kategori</option>
                                    <?php

			$icsqlbirim = $db->query("select * from kurumsal WHERE kat = '0' order by id asc");
			$icabirim = $icsqlbirim->fetchAll();

			for ($ic=0; $ic < $icsqlbirim->rowCount(); $ic++) {

			if ($linebirim[0]['durum'] == $icabirim[$ic]['id']) { $selected = " selected"; } else { $selected = ""; }
echo "			<option value=\"".$icabirim[$ic]['id']."\"$selected>".$icabirim[$ic]['baslik']."</option>\n";
            }
/*
					$icsqlbirim = $db->prepare("select * from kurumsalkategori WHERE kat = :kat order by id asc");
					$icsqlbirim->execute(['kat'=>$icabirim['id']]);
					$icabirim = $icsqlbirim->fetchAll();

			for ($ic=0; $ic < $icsqlbirim->rowCount(); $ic++) {

			if ($linebirim[0]['durum'] == $icabirim[$ic]['id']) { $selected = " selected"; } else { $selected = ""; }
echo "			<option value=\"".$icabirim[$ic]['id']."\"$selected>&nbsp;&nbsp;&nbsp;- ".$icabirim[$ic]['baslik']."</option>\n";
            }
*/
			?>

            </select>
        </div>


 <div class="col-sm-12">
  <label> Başlık</label><input type="text" name="baslik" id="baslik" value="<?=$_POST['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
  <label> Yönlendir (URL)</label><input type="text" name="yonlendir" id="yonlendir" value="<?=$_POST['yonlendir']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

  <div class="square-green single-row"><div class="checkbox ">
  <label><strong>Yönlendirme Ayrı Pencerede Açılsın</strong></label>
  <input class="form-control checkbox" name="target" id="target" type="checkbox" value="1">
     </div>
 </div>


                       <div class="square-green single-row"><div class="checkbox ">
  <label><strong>Üst Menüde Göster</strong></label>
  <input class="form-control checkbox" name="anasayfa" id="anasayfa" type="checkbox" value="1">
     </div>
 </div>

            <div class="square-green single-row"><div class="checkbox ">
  <label><strong>İlk Sayfa Yap (Giriş Sayfası)</strong></label>
  <input class="form-control checkbox" name="ilk" id="ilk" type="checkbox" value="1">
     </div>
 </div>

 <div class="square-green single-row"><div class="checkbox "><label><strong>Aktif</strong></label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <?php if($upcek[0]['aktif'] == "1"){echo "checked";}?>/></div></div>



<div class="col-sm-12">
<label>İçerik</label>
 <textarea name="icerik" class="ckeditor"></textarea>  </div>

             <div class="col-sm-12">
               <label>Include Dosyası 1 (Örn; fotoalbum.php gibi)</label><input type="text" name="include1" id="include1" value="<?=$_POST['include1']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
  </div>

    <div class="col-sm-12">
               <label>Include Dosyası 2</label><input type="text" name="include2" id="include2" value="<?=$_POST['include2']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
  </div>

    <div class="col-sm-12">
               <label>Include Dosyası 3</label><input type="text" name="include3" id="include3" value="<?=$_POST['include3']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
  </div>

   <div class="col-sm-12">
  <label>İç Arkaplan</label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/> (Boş Arkaplan için <a href="images/icbg-ornek.jpg" target="_blank">tıklayın</a>. Not: Bu grafiği kaydedip üzerine şeffaf olabilecek şekilde çalışma yapabilirsiniz. jpg formatında yüklemelisiniz.)
</div>

<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="kurumsalekle" />
<input name="kategori" type="hidden" id="kategori" value="<?=$_GET['katid']?>" />
<input type="submit" name="button" id="button" value="Ekle" class="btn btn-warning btn-lg"/>
</div>
</form>
</div>
</div></div>
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
