<?php
//include("../../config.php");
// menu sayilari aliniyor.
$kac = $db->query("SELECT * FROM odalar");
$say = $kac->rowCount();
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "odalarekle"){
	
	/*
	foreach ($_POST as $key => $value) {
    echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
}
*/

if($hata == ""){

if ($_FILES["fotograf"]["name"] != ""){
$hedef	= "../images/odalar";
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

	
$sql = $db->query("INSERT INTO odatipleri (name,aktif) VALUES('".$baslik."',0)");
$last_id = $db->lastInsertId();
$mesaj = 'başarılı';
} if($hata != ""){
	hata($hata);
 }
}?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Onnestui! Odota, sinut ohjataan muokkaussivulle
</div>
	  
	 	   <meta http-equiv="refresh" content="3;URL=index.php?page=Odatipleri&git=Duzenle&id=<?=$last_id?>" />

<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lisää uusi</h3>
                        </div>
                        <div class="panel-body">

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">


   <div id="tabs">
   <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">


 <div class="col-sm-12">
  <label> Nimi</label><input type="text" name="baslik" id="baslik" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

 <div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="odalarekle" />
<input name="kategori" type="hidden" id="kategori" />
<input type="submit" name="button" id="button" value="Editoida" class="btn btn-warning btn-lg"/>
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
