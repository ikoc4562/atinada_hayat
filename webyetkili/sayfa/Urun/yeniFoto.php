<?php
// menu sayilari aliniyor.
$kac = $db->query("SELECT * FROM urungaleri");
$say = $kac->rowCount();
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "urungaleriekle"){


if($hata == ""){

if ($_FILES["fotograf"]["name"] != ""){
$hedef	= "../images/urun";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);
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

$kat = $_POST['kat'];
if($kat == ""){
	$kat = 0;
}

$aktif = $_POST['aktif'];
if($aktif == ""){
	$aktif = 1;
}
$sql = $db->query("INSERT INTO urungaleri (baslik,kat,baslik_eng,fotograf,aktif,sira) VALUES ('".$baslik."','".$kat."','".$baslik_eng."','".$resim."','".$aktif."','".$sonsayi."')");
$mesaj = 'başarılı';

} if($hata != ""){
	hata($hata);
 }?>


<?php }?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Yeni Veri Başarıyla Kaydedildi! Bekleyiniz.
 <meta http-equiv="refresh" content="3;URL=index.php?page=Urun&git=Fotograf&id=<?=$_POST['kat']?>" />
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




</div>




 <div class="col-sm-12">
  <label> Açıklama</label><input type="text" name="baslik" id="baslik" value="<?=$_POST['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

    <div class="col-sm-12">
  <label>Fotoğraf  </label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/>
</div>

<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="urungaleriekle" />
<input name="kat" type="hidden" id="kat" value="<?=$_GET['id']?>" />
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
