<?php
//include("../../config.php");

if ($_POST['islem'] == "duzenle"){


if ($_FILES["fotograf"]["name"] != ""){

			$kaynak = "../images/slider/".$_GET['resimadi'];
			@unlink($kaynak);
			$hedef	= "../images/slider";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);
	echo $hedef;

			$sql = $db->prepare("UPDATE slider SET fotograf = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim,'id'=>$_GET['id']]);
}

$baslik = str_replace("","",$_POST['baslik']);
$baslik = str_replace("'","`",$baslik);

$baslik2 = str_replace("","",$_POST['baslik2']);
$baslik2 = str_replace("'","`",$baslik2);




$aktif = $_POST['aktif'];
if($aktif == ""){
	$aktif = 0;
}
 			$db->query("UPDATE slider SET baslik='".$baslik."',baslik2='".$baslik2."',aktif='".$aktif."' WHERE id = '".$_GET['id']."'");

$mesaj = 'başarılı';
}

$ssql = $db->prepare("SELECT * FROM slider WHERE id = :id");
$ssql->execute(['id'=>$_GET['id']]);
$upcek = $ssql->fetchAll();
?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">onnistui!
</div>
 <meta http-equiv="refresh" content="3;URL=index.php?page=sayfalar&id=<?=$_GET['sid']?>" />
<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">editoida</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&resimadi=<?=$upcek[0]['fotograf']?>&sira=<?=$upcek[0]['sira']?>" method="post" enctype="multipart/form-data">
  <div id="tabs">
    


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

	
	
 <div class="col-sm-12">
  <label> Ostikko 1</label><input type="text" name="baslik" id="baslik" value="<?=$upcek[0]['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

  <div class="col-sm-12">
  <label> Ostikko 2<input type="text" name="baslik2" id="baslik2" value="<?=$upcek[0]['baslik2']?>" 
  class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>




 <div class="square-green single-row"><div class="checkbox ">
  <label>Aktiivinen</label>
<input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <?php if($upcek[0]['aktif'] == "1"){echo "checked";}?>/>
     </div></div>

<div class="col-sm-12">
  <label>Kuva  </label>
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
