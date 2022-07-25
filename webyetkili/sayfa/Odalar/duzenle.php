<?php

if ($_POST['islem'] == "duzenle"){


$baslik = str_replace("","",$_POST['name']);
$baslik = str_replace("'","`",$baslik);

$manzara = str_replace("","",$_POST['manzara']);
$manzara = str_replace("'","`",$manzara);
	
$metrekare = str_replace("","",$_POST['metrekare']);
$metrekare = str_replace("'","`",$metrekare);
	
$kat = $_POST['kat'];
if($kat == ""){
	$kat = 0;
}

$aktif = $_POST['aktif'];
if($aktif == ""){
	$aktif = 0;
}

$db->query("UPDATE odalar SET name='".$baslik."',otid='".$kat."',manzara='".$manzara."',metrekare='".$metrekare."',aktif='".$aktif."' WHERE id = '".$_GET['id']."'");


$mesaj = 'Onnestui';
}

$ssql = $db->prepare("SELECT * FROM odalar WHERE id = :id");
$ssql->execute(['id'=>$_GET['id']]);
$upcek = $ssql->fetchAll();
?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Editoitiin!
</div>
	   <meta http-equiv="refresh" content="3;URL=index.php?page=sayfalar&id=48" />

<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Editoida</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&sira=<?=$upcek[0]['sira']?>" method="post" enctype="multipart/form-data">
  <div id="tabs">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

 <div class="col-sm-12">
  <label>Nimi</label><input type="text" name="name" id="name" value="<?=$upcek[0]['name']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
<div class="col-sm-12">
  <label>Näkymä</label><input type="text" name="manzara" id="manzara" value="<?=$upcek[0]['manzara']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	<div class="col-sm-12">
 <label>Neliömetri</label>
 <input type="text" name="metrekare" id="metrekare" value="<?=$upcek[0]['metrekare']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
<div class="col-sm-12">
<label> Huone Typpy</label>
<select class="form-control m-bot15" name="kat" id="kat">
		                    <option value="0" selected="selected">Typpyt</option>
                                    <?php

			$icsqlbirim = $db->query("select * from odatipleri order by id asc");
			$icabirim = $icsqlbirim->fetchAll();
			for ($ic=0; $ic < $icsqlbirim->rowCount(); $ic++) {

			if ($upcek[0]['otid'] == $icabirim[$ic]['id']) { $selected = " selected"; } else { $selected = ""; }
echo "			<option value=\"".$icabirim[$ic]['id']."\"$selected>".$icabirim[$ic]['name']."</option>\n";
            }

			?>

            </select>
        </div>



  <div class="square-green single-row"><div class="checkbox "><label>Aktiivinen</label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <?php if($upcek[0]['aktif'] == "1"){echo "checked";}?>/></div></div>



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
