<?php
//include("../../config.php");

if ($_POST['islem'] == "duzenle"){


if ($_FILES["fotograf"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);

			$sql = $db->prepare("UPDATE odatipleri SET fotograf = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf2"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi2'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf2"]["tmp_name"];
			$resim1		= $_FILES["fotograf2"]["name"];
			$rtipi1		= $_FILES["fotograf2"]["type"];
			$rboyut1	= $_FILES["fotograf2"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim2 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim2);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf2 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim2,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf3"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi3'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf3"]["tmp_name"];
			$resim1		= $_FILES["fotograf3"]["name"];
			$rtipi1		= $_FILES["fotograf3"]["type"];
			$rboyut1	= $_FILES["fotograf3"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim3 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim3);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf3 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim3,'id'=>$_GET['id']]);
}


if ($_FILES["fotograf4"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi4'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf4"]["tmp_name"];
			$resim1		= $_FILES["fotograf4"]["name"];
			$rtipi1		= $_FILES["fotograf4"]["type"];
			$rboyut1	= $_FILES["fotograf4"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim4 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim4);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf4 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim4,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf5"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi5'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf5"]["tmp_name"];
			$resim1		= $_FILES["fotograf5"]["name"];
			$rtipi1		= $_FILES["fotograf5"]["type"];
			$rboyut1	= $_FILES["fotograf5"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim5 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim5);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf5 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim5,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf6"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi6'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf6"]["tmp_name"];
			$resim1		= $_FILES["fotograf6"]["name"];
			$rtipi1		= $_FILES["fotograf6"]["type"];
			$rboyut1	= $_FILES["fotograf6"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim6 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim6);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf6 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim6,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf7"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi7'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf7"]["tmp_name"];
			$resim1		= $_FILES["fotograf7"]["name"];
			$rtipi1		= $_FILES["fotograf7"]["type"];
			$rboyut1	= $_FILES["fotograf7"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim7 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim7);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf7 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim7,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf8"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi8'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf8"]["tmp_name"];
			$resim1		= $_FILES["fotograf8"]["name"];
			$rtipi1		= $_FILES["fotograf8"]["type"];
			$rboyut1	= $_FILES["fotograf8"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim8 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim8);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf8 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim8,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf9"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi9'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf9"]["tmp_name"];
			$resim1		= $_FILES["fotograf9"]["name"];
			$rtipi1		= $_FILES["fotograf9"]["type"];
			$rboyut1	= $_FILES["fotograf9"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim9 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim9);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf9 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim9,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf10"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi10'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf10"]["tmp_name"];
			$resim1		= $_FILES["fotograf10"]["name"];
			$rtipi1		= $_FILES["fotograf10"]["type"];
			$rboyut1	= $_FILES["fotograf10"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim10 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim10);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf10 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim10,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf11"]["name"] != ""){

			$kaynak = "../images/odalar/".$_GET['resimadi11'];
			@unlink($kaynak);
			$hedef	= "../images/odalar";
			$kaynak1	= $_FILES["fotograf11"]["tmp_name"];
			$resim1		= $_FILES["fotograf11"]["name"];
			$rtipi1		= $_FILES["fotograf11"]["type"];
			$rboyut1	= $_FILES["fotograf11"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim11 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim11);


			$sql = $db->prepare("UPDATE odatipleri SET fotograf11 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim11,'id'=>$_GET['id']]);
}

$name = str_replace("","",$_POST['name']);
$name = str_replace("'","`",$name);

$fiyat = str_replace("","",$_POST['fiyat']);
$fiyat = str_replace("'","`",$fiyat);

$yetiskin = str_replace("","",$_POST['yetiskin']);
$yetiskin = str_replace("'","`",$yetiskin);

$cocuk = str_replace("","",$_POST['cocuk']);
$cocuk = str_replace("'","`",$cocuk);

$metrekare = str_replace("","",$_POST['metrekare']);
$metrekare = str_replace("'","`",$metrekare);

$yataksayisi = str_replace("","",$_POST['yataksayisi']);
$yataksayisi = str_replace("'","`",$yataksayisi);

$manzara = str_replace("","",$_POST['manzara']);
$manzara = str_replace("'","`",$manzara);

$aciklama = str_replace("","",$_POST['aciklama']);
$aciklama = str_replace("'","`",$aciklama);


$aktif = $_POST['aktif'];
if($aktif == ""){
	$aktif = 0;
}

//foreach($_POST as $veri){
	
//	echo $veri."</br>";
//}
	

	
$db->query("UPDATE odatipleri SET name='".$name."',fiyat='".$fiyat."',yetiskin='".$yetiskin."',aktif='".$aktif."',aciklama='".$aciklama."',yataksayisi='".$yataksayisi."',cocuk='".$cocuk."' WHERE id = '".$_GET['id']."'");
	


$mesaj = 'başarılı';
}

$ssql = $db->prepare("SELECT * FROM odatipleri WHERE id = :id");
$ssql->execute(['id'=>$_GET['id']]);
$upcek = $ssql->fetchAll();
?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Editoitiin!
</div>
	   <meta http-equiv="refresh" content="3;URL=index.php?page=sayfalar&id=107" />

<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Editoida</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&resimadi=<?=$upcek[0]['fotograf']?>&resimadi2=<?=$upcek[0]['fotograf2']?>&resimadi3=<?=$upcek[0]['fotograf3']?>&resimadi4=<?=$upcek[0]['fotograf4']?>&resimadi5=<?=$upcek[0]['fotograf5']?>&resimadi6=<?=$upcek[0]['fotograf6']?>&resimadi7=<?=$upcek[0]['fotograf7']?>&resimadi8=<?=$upcek[0]['fotograf8']?>&resimadi9=<?=$upcek[0]['fotograf9']?>&resimadi10=<?=$upcek[0]['fotograf10']?>&resimadi11=<?=$upcek[0]['fotograf11']?>&sira=<?=$upcek[0]['sira']?>" method="post" enctype="multipart/form-data">
  <div id="tabs">
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <div class="col-sm-12">
      <label> Typpi Nimi</label><input type="text" name="name" id="name" value="<?=$upcek[0]['name']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	    <div class="col-sm-12">
      <label> Hinta</label><input type="text" name="fiyat" id="fiyat" value="<?=$upcek[0]['fiyat']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	      <div class="col-sm-12">
      <label>Aikuisin</label><input type="text" name="yetiskin" id="yetiskin" value="<?=$upcek[0]['yetiskin']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	      <div class="col-sm-12">
      <label> Lasta</label><input type="text" name="cocuk" id="cocuk" value="<?=$upcek[0]['cocuk']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	      
	      <div class="col-sm-12">
      <label> Sänky määrät</label><input type="text" name="yataksayisi" id="yataksayisi" value="<?=$upcek[0]['yataksayisi']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	      

    <div class="square-green single-row"><div class="checkbox "><label style="color: red; font-weight: bold">Aktiivinen
</label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <?php if($upcek[0]['aktif'] == "1"){echo "checked";}?>/></div></div>

<div class="col-sm-12">
<label>Selitys</label>
 <textarea name="aciklama" class="ckeditor"><?=$upcek[0]['aciklama']?></textarea>  </div>
<div class="col-sm-12">
  <input name="islem" type="hidden" id="islem" value="duzenle" />
    <input type="submit" name="button" id="button" value="Editoida" class="btn btn-warning btn-lg"/>
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
