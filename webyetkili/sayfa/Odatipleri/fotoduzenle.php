<?php

if ($_POST['islem'] == "duzenle"){


if ($_FILES["fotograf"]["name"] != ""){

			$kaynak = "../images/Odalar/".$_GET['resimadi'];
			@unlink($kaynak);
			$hedef	= "../images/Odalar";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);

			$sql = $db->prepare("UPDATE odagaleri SET fotograf = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim,'id'=>$_GET['id']]);
}

$baslik = str_replace("","",$_POST['baslik']);
$baslik = str_replace("'","`",$baslik);


			$aktif = $_POST['aktif'];
			if($aktif == ""){
				$aktif = 0;
			}
	
	$anaresim = $_POST['anaresim'];
			if($anaresim == ""){
				$anaresim = 0;
			}
	if($anaresim==1){
		
		$db->query("UPDATE odagaleri SET anaresim=0 WHERE kat = '".$_GET['sid']."'");
	}
 			$db->query("UPDATE odagaleri SET baslik='".$baslik."',anaresim='".$anaresim."',aktif='".$aktif."' WHERE id = '".$_GET['id']."'");
	

$mesaj = 'başarılı';
}

$ssql = $db->prepare("SELECT * FROM odagaleri WHERE id = :id");
$ssql->execute(['id'=>$_GET['id']]);
$upcek = $ssql->fetchAll();
?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Editoitiin!
</div>
 <meta http-equiv="refresh" content="3;URL=index.php?page=Odatipleri&git=Fotograf&id=<?=$_GET['sid']?>" />
<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Editoida</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&resimadi=<?=$upcek[0]['fotograf']?>&sira=<?=$upcek[0]['sira']?>" method="post" enctype="multipart/form-data">
  <div id="tabs">
    


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">




 <div class="col-sm-12">
  <label> Otsikko</label><input type="text" name="baslik" id="baslik" value="<?=$upcek[0]['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

 <div class="square-green single-row"><div class="checkbox ">
  <label>Aktiivinen</label>
<input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <?php if($upcek[0]['aktif'] == "1"){echo "checked";}?>/>
     </div></div>

	 <div class="square-green single-row"><div class="checkbox ">
  <label>Näyttetään Kuva</label>
<input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" name="anaresim" id="anaresim" type="checkbox" value="1" <?php if($upcek[0]['anaresim'] == "1"){echo "checked";}?>/>
     </div></div>

<div class="col-sm-12">
  <label>Valitse Kuva  </label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/>
</div>

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
