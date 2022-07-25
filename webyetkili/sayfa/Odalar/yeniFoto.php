<?php



$kat = $_GET['id'];

// menu sayilari aliniyor.
$kac = $db->query("SELECT * FROM odagaleri");
$say = $kac->rowCount();
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "odagaleriekle"){


if($hata == ""){

if ($_FILES["fotograf"]["name"] != ""){
$hedef	= "../images/Odalar";
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


	
$aktif = $_POST['aktif'];
if($aktif == true){
	$aktif = 1;
}else{
		$aktif = 0;

}
	
$anaresim = $_POST['anaresim'];
if($anaresim == true){
	$anaresim = 1;
}else{
		$anaresim = 0;

}

	if($anaresim==1){
		
		$db->query("UPDATE odagaleri SET anaresim=0 WHERE kat = '".$_GET['id']."'");
	}
	
	if($_POST['tumoda']==true){
		
		$sql = $db->query("INSERT INTO odagaleri (baslik,kat,anaresim,fotograf,aktif,sira) VALUES ('".$baslik."',99,'".$anaresim."','".$resim."','".$aktif."','".$sonsayi."')");	}
	else{
		$sql = $db->query("INSERT INTO odagaleri (baslik,kat,anaresim,fotograf,aktif,sira) VALUES ('".$baslik."','".$kat."','".$anaresim."','".$resim."','".$aktif."','".$sonsayi."')");
	}
	
	
	
$mesaj = 'başarılı';

} if($hata != ""){
	hata($hata);
 }?>


<?php }?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Onnistui tallennettiin
 <meta http-equiv="refresh" content="3;URL=index.php?page=Odalar&git=Fotograf&id=<?=$_GET['id']?>" />
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
  <label> Otsikko</label><input type="text" name="baslik" id="baslik"  class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
 <div class="square-green single-row"><div class="checkbox ">
  <label>Aktiivinen</label>
<input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox"/>
     </div></div>

	 <div class="square-green single-row"><div class="checkbox ">
  <label>Ensimmäinen kuva?</label>
<input name="anaresim" type="checkbox" class="form-control tooltips" id="anaresim" data-trigger="hover" data-toggle="tooltip"/>
     </div></div>
	
	 <div class="square-green single-row"><div class="checkbox ">
  <label>Onko se voimassa kaikissa huoneissa?</label>
<input name="tumoda" type="checkbox" class="form-control tooltips" id="tumoda" data-trigger="hover" data-toggle="tooltip"/>
     </div></div>
	
    <div class="col-sm-12">
  <label>Valitse Kuva </label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/>
</div>

<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="odagaleriekle" />
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
