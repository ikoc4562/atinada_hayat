<?php

if ($_POST['islem'] == "duzenle"){


$email = str_replace("","",$_POST['email']);
$email = str_replace("'","`",$email);

$sifre = str_replace("","",$_POST['sifre']);
$sifre = str_replace("'","`",$sifre);

$sifre = hash("sha256", $sifre);

$aktif = $_POST['aktif'];
if($aktif == ""){
	$aktif = 0;
}
	
$db->query("UPDATE uyeler SET eposta='".$_POST['email']."',durum='".$aktif."',sifre = '".$sifre."' WHERE id = '".$_GET['id']."'");


$mesaj = 'onnistunut';
}

$ssql = $db->prepare("SELECT * FROM uyeler WHERE id = :id");
$ssql->execute(['id'=>$_GET['id']]);
$upcek = $ssql->fetchAll();
?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">onnistunut Editoitiin !
</div>
	  	   <meta http-equiv="refresh" content="3;URL=index.php?page=sayfalar&id=106" />

<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Editoida</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data">
  <div id="tabs">



<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">





 <div class="col-sm-12">
  <label> Sähköposti</label><input type="text" name="email" id="email" value="<?=$upcek[0]['eposta']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
  <label> Salasana</label><input type="password" name="sifre" id="sifre" value="<?=$upcek[0]['sifre']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>


<div class="square-green single-row"><div class="checkbox "><label>Aktiviinen</label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <?php if($upcek[0]['durum'] == "1"){echo "checked";}?>/></div></div>



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
