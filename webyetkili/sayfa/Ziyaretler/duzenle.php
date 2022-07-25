<?php

if ($_POST['islem'] == "duzenle"){


if ($_FILES["fotograf"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);

			$sql = $db->prepare("UPDATE ziyaretler SET fotograf = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf2"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi2'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf2"]["tmp_name"];
			$resim1		= $_FILES["fotograf2"]["name"];
			$rtipi1		= $_FILES["fotograf2"]["type"];
			$rboyut1	= $_FILES["fotograf2"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim2 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim2);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf2 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim2,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf3"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi3'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf3"]["tmp_name"];
			$resim1		= $_FILES["fotograf3"]["name"];
			$rtipi1		= $_FILES["fotograf3"]["type"];
			$rboyut1	= $_FILES["fotograf3"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim3 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim3);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf3 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim3,'id'=>$_GET['id']]);
}


if ($_FILES["fotograf4"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi4'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf4"]["tmp_name"];
			$resim1		= $_FILES["fotograf4"]["name"];
			$rtipi1		= $_FILES["fotograf4"]["type"];
			$rboyut1	= $_FILES["fotograf4"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim4 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim4);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf4 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim4,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf5"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi5'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf5"]["tmp_name"];
			$resim1		= $_FILES["fotograf5"]["name"];
			$rtipi1		= $_FILES["fotograf5"]["type"];
			$rboyut1	= $_FILES["fotograf5"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim5 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim5);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf5 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim5,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf6"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi6'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf6"]["tmp_name"];
			$resim1		= $_FILES["fotograf6"]["name"];
			$rtipi1		= $_FILES["fotograf6"]["type"];
			$rboyut1	= $_FILES["fotograf6"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim6 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim6);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf6 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim6,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf7"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi7'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf7"]["tmp_name"];
			$resim1		= $_FILES["fotograf7"]["name"];
			$rtipi1		= $_FILES["fotograf7"]["type"];
			$rboyut1	= $_FILES["fotograf7"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim7 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim7);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf7 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim7,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf8"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi8'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf8"]["tmp_name"];
			$resim1		= $_FILES["fotograf8"]["name"];
			$rtipi1		= $_FILES["fotograf8"]["type"];
			$rboyut1	= $_FILES["fotograf8"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim8 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim8);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf8 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim8,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf9"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi9'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf9"]["tmp_name"];
			$resim1		= $_FILES["fotograf9"]["name"];
			$rtipi1		= $_FILES["fotograf9"]["type"];
			$rboyut1	= $_FILES["fotograf9"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim9 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim9);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf9 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim9,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf10"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi10'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf10"]["tmp_name"];
			$resim1		= $_FILES["fotograf10"]["name"];
			$rtipi1		= $_FILES["fotograf10"]["type"];
			$rboyut1	= $_FILES["fotograf10"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim10 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim10);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf10 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim10,'id'=>$_GET['id']]);
}

if ($_FILES["fotograf11"]["name"] != ""){

			$kaynak = "../images/ziyaretler/".$_GET['resimadi11'];
			@unlink($kaynak);
			$hedef	= "../images/ziyaretler";
			$kaynak1	= $_FILES["fotograf11"]["tmp_name"];
			$resim1		= $_FILES["fotograf11"]["name"];
			$rtipi1		= $_FILES["fotograf11"]["type"];
			$rboyut1	= $_FILES["fotograf11"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim11 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim11);


			$sql = $db->prepare("UPDATE ziyaretler SET fotograf11 = :foto WHERE id = :id");
			$sql->execute(['foto'=>$resim11,'id'=>$_GET['id']]);
}

$tarih = $_POST[yil].-$_POST[ay].-$_POST[gun];

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


$anasayfa = $_POST['anasayfa'];
if($anasayfa == ""){
	$anasayfa = 0;
}

$target = $_POST['target'];
if($target == ""){
	$target = 0;
}

$ilk = $_POST['ilk'];
if($ilk == ""){
	$ilk = 0;
}

$kat = $_POST['kat'];
if($kat == ""){
	$kat = 0;
}

$aktif = $_POST['aktif'];
if($aktif == ""){
	$aktif = 0;
}
$db->query("UPDATE ziyaretler SET baslik='".$baslik."',baslik_eng='".$baslik_eng."',kat='".$kat."',yonlendir='".$_POST['yonlendir']."',yonlendir_eng='".$_POST['yonlendir_eng']."',target='".$target."',anasayfa='".$anasayfa."',aktif='".$aktif."',icerik='".$icerik."',icerik_eng='".$icerik_eng."',include1='".$_POST['include1']."',include2='".$_POST['include2']."',include3='".$_POST['include3']."',ilk='".$ilk."',tarih='".$tarih."',gun='".$_POST['gun']."',ay='".$_POST['ay']."',yil='".$_POST['yil']."',ozet='".$ozet."',ozet_eng='".$ozet_eng."' WHERE id = '".$_GET['id']."'");


$mesaj = 'başarılı';
}

$ssql = $db->prepare("SELECT * FROM ziyaretler WHERE id = :id");
$ssql->execute(['id'=>$_GET['id']]);
$upcek = $ssql->fetchAll();
?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Başarıyla Düzenlendi!
</div>
<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Düzenle</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&resimadi=<?=$upcek[0]['fotograf']?>&resimadi2=<?=$upcek[0]['fotograf2']?>&resimadi3=<?=$upcek[0]['fotograf3']?>&resimadi4=<?=$upcek[0]['fotograf4']?>&resimadi5=<?=$upcek[0]['fotograf5']?>&resimadi6=<?=$upcek[0]['fotograf6']?>&resimadi7=<?=$upcek[0]['fotograf7']?>&resimadi8=<?=$upcek[0]['fotograf8']?>&resimadi9=<?=$upcek[0]['fotograf9']?>&resimadi10=<?=$upcek[0]['fotograf10']?>&resimadi11=<?=$upcek[0]['fotograf11']?>&sira=<?=$upcek[0]['sira']?>" method="post" enctype="multipart/form-data">
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
  <input type="text" name="baslik_eng" id="baslik_eng" value="<?=$upcek[0]['baslik_eng']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>


 <div class="col-sm-12">
  <label><font color="red">Yönlendir (URL)</font></label>
  <input type="text" name="yonlendir_eng" id="yonlendir_eng" value="<?=$upcek[0]['yonlendir_eng']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12"><font color="red">Açıklama</font>
  <textarea name="icerik_eng" class="form-control tooltips"><?=$upcek[0]['icerik_eng']?></textarea>  </div>


</div>




 <div class="col-sm-12">
  <label> Başlık</label><input type="text" name="baslik" id="baslik" value="<?=$upcek[0]['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
  <label> Tarih</label>
<select name="gun" class="form-control m-bot15" size="1" style="width:100px;">
                                    <option><?=$upcek[0]['gun']?></option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                            </select>/<select class="form-control m-bot15" name="ay" size="1" style="width:100px;">
                                    <option><?=$upcek[0]['ay']?></option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                            </select> / <select name="yil" size="1" class="form-control m-bot15" style="width:100px;">
                                    <option><?=$upcek[0]['yil']?></option>
									<option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                            </select>

</div>


  <div class="square-green single-row"><div class="checkbox "><label>Aktif</label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <?php if($upcek[0]['aktif'] == "1"){echo "checked";}?>/></div></div>

<div class="col-sm-12">
<label>Açıklama</label>
 <textarea name="icerik" class="form-control tooltips"><?=$upcek[0]['icerik']?></textarea>  </div>


 <div class="col-sm-12">
  <label>Fotoğraf</label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/>
</div>

  <div class="col-sm-12">
    <input name="islem" type="hidden" id="islem" value="duzenle" />
    <input type="submit" name="button" id="button" value="Düzenle" class="btn btn-warning btn-lg"/>
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
