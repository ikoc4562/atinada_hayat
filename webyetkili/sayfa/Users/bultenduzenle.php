 <?php
 $ssql = $db->prepare("SELECT * FROM bulten WHERE id = :id");
 $ssql->execute(['id'=>$_GET['id']]);
 $upcek = $ssql->fetchAll();?>

  <div class="wrapper">

        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Gönderilen Bülten</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&resimadi=<?=$upcek[0]['fotograf']?>&resimadi2=<?=$upcek[0]['fotograf2']?>&resimadi3=<?=$upcek[0]['fotograf3']?>&resimadi4=<?=$upcek[0]['fotograf4']?>&resimadi5=<?=$upcek[0]['fotograf5']?>&resimadi6=<?=$upcek[0]['fotograf6']?>&resimadi7=<?=$upcek[0]['fotograf7']?>&resimadi8=<?=$upcek[0]['fotograf8']?>&resimadi9=<?=$upcek[0]['fotograf9']?>&resimadi10=<?=$upcek[0]['fotograf10']?>&resimadi11=<?=$upcek[0]['fotograf11']?>&sira=<?=$upcek[0]['sira']?>" method="post" enctype="multipart/form-data">
  <div id="tabs">



<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">




<div class="square-green single-row">
<div class="checkbox "><label><strong>Haber Grubu</strong></label>&nbsp;<br />
  Jeodezi
    <input name="sayfa[]" type="checkbox" id="sayfa[]" value="1" <?php
	$sq1 = $db->prepare("SELECT * FROM bulten WHERE sayfa LIKE '%1%' and id = :id");
  $sq1->execute(['id'=>$_GET['id']]);
  $varmi1 = $sq1->rowCount();
	if ($varmi1 == "1"){ echo 'checked="checked"';}?> />
Fotogrametri
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="2" <?php
	$sq1 = $db->prepare("SELECT * FROM bulten WHERE sayfa LIKE '%2%' and id = :id");
  $sq1->execute(['id'=>$_GET['id']]);
  $varmi1 = $sq1->rowCount();
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>
Kartografya
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="3" <?php
	$sq1 = $db->prepare("SELECT * FROM bulten WHERE sayfa LIKE '%3%' and id = :id");
  $sq1->execute(['id'=>$_GET['id']]);
  $varmi1 = $sq1->rowCount();
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>
Coğrafi Bilgi Sistemleri
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="4" <?php
	$sq1 = $db->prepare("SELECT * FROM bulten WHERE sayfa LIKE '%4%' and id = :id");
  $sq1->execute(['id'=>$_GET['id']]);
  $varmi1 = $sq1->rowCount();
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>
Genel
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="4" <?php
	$sq1 = $db->prepare("SELECT * FROM bulten WHERE sayfa LIKE '%5%' and id = :id");
  $sq1->execute(['id'=>$_GET['id']]);
  $varmi1 = $sq1->rowCount();
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>

</div>
</div>


 <div class="col-sm-12">
  <label> Başlık</label><input type="text" name="baslik" id="baslik" value="<?=$upcek[0]['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
<label>İçerik</label>
 <textarea name="icerik" class="ckeditor"><?=$upcek[0]['icerik']?></textarea></div>

 <div class="col-sm-12">
  <label> Tarih</label><input type="text" name="baslik" id="baslik" value="<?=$upcek[0]['tarih']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
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
