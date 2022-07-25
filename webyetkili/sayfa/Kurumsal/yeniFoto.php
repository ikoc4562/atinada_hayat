<?php
// menu sayilari aliniyor.
$kac = $db->query("SELECT * FROM kurumsalgaleri");
$say = $kac->rowCount();
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "kurumsalgaleriekle"){


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
	
$anasayfa = $_POST['anasayfa'];
if($anasayfa == ""){
	$anasayfa = 0;
}else{
	$anasayfa = 1;
}
	
$sql = $db->query("INSERT INTO kurumsalgaleri (baslik,kat,anasayfa,baslik_eng,fotograf,aktif,sira) VALUES ('".$baslik."','".$kat."','".$anasayfa."','".$baslik_eng."','".$resim."','".$aktif."','".$sonsayi."')");
$mesaj = 'başarılı';

} if($hata != ""){
	hata($hata);
 }?>


<?php }?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Onnistui tallennettiin
 <meta http-equiv="refresh" content="3;URL=index.php?page=Kurumsal&git=Fotograf&id=<?=$_POST['kat']?>" />
</div>
<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lisää Uusi</h3>
                        </div>
                        <div class="panel-body">

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">


   <div id="tabs">



<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">





 <div class="col-sm-12">
  <label> Otsikko</label><input type="text" name="baslik" id="baslik" value="<?=$_POST['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	 <div class="square-green single-row"><div class="checkbox ">
  <label>Etusivu kuva?</label>
<input name="anasayfa" type="checkbox" class="form-control tooltips" id="anasayfa" data-trigger="hover" data-toggle="tooltip"/>
     </div></div>
    <div class="col-sm-12">
  <label>Valitse Kuva  (800*1000px pitäisi olla)</label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/>
</div>

<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="kurumsalgaleriekle" />
<input name="kat" type="hidden" id="kat" value="<?=$_GET['id']?>" />
<input type="submit" name="button" id="button" value="Lisää" class="btn btn-warning btn-lg"/>
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
