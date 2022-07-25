<?php
	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM urun WHERE id = :id");
		$sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Başarıyla Silindi";
				}

if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$sss = $db->prepare("SELECT * FROM urun WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE urun SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE urun SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$sss = $db->prepare("SELECT * FROM urun WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE urun SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE urun SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);
  	}
 ?>

       <form id="sayfalar">

           <div class="row">
        <div class="col-sm-12">
         <div class="wrapper">
  <?php if($mesaj != ""){?>
 <div class="alert alert-success">
 Başarıyla Silindi!
</div>
<div class="clear"></div><BR />
<?php }?>
        <section class="panel">
        <header class="panel-heading">
            Urun
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>

        </header>

        <div class="panel-body">

          <a href="index.php?page=Urun&git=yeniEkle" class="btn btn-primary btn-lg"> Yeni Sayfa Ekle </a>

        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">

        <thead>

        <tr>
                    <th>&nbsp;</th>

              <th>Sayfa adı </th>
             <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     <?php
$sql = $db->query("SELECT * FROM urun WHERE kat = '0' ORDER by sira ASC");
$variable = $sql->fetchAll();
foreach ($variable as $cek) {
  # code...
//while($cek = mysql_fetch_assoc($sql)){

$sql2z2 = $db->query("SELECT * FROM urun WHERE kat = '0' ORDER by sira ASC");

$kactanecik = $sql2z2->rowCount();

$val = $cek['id'];
$sql2 = $db->prepare("SELECT * FROM urun WHERE kat = :val ORDER by sira ASC");
$sql2->execute(['val'=>$val]);

$kactane = $sql2->rowCount();

$val = $cek['id'];
$sql2z2z = $db->prepare("SELECT * FROM urun WHERE kat = :val ORDER by sira ASC");
$kactanecik2 = $sql2z2z->rowCount();
?>
<tr class="gradeA">
           <td></td>
             <td><?=$cek['baslik']?></td>
                   <td class="hidden-phone">
                  <?php if($cek['sira'] != "1"){ ?>
   			      <a href="index.php?page=sayfalar&id=65&islem=yukari&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <?php } if ($cek['sira'] != $kactanecik){?>
   				  <a href="index.php?page=sayfalar&id=65&islem=asagi&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <?php }?>

				  <a href="index.php?page=Urun&git=Fotograf&id=<?=$cek['id']?>" title="Fotoğraflar" class="btn btn-default active"><i class="fa fa-camera"></i></a>
                                                          <a href="index.php?page=Urun&git=Dosya&id=<?=$cek['id']?>" title="Dosyalar" class="btn btn-default active"><i class="fa fa-folder"></i></a>

                  <a href="index.php?page=Urun&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
				  <a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
                  </td>
        </tr><?php if($kactane > "0"){ ?>
<?php
$variable = $sql2->fetchAll();
foreach ($variable as $cek2) {
  # code...
//while($cek2 = mysql_fetch_assoc($sql2)){
?>
<tr class="gradeA">
           <td></td>
             <td style="padding-left:30px;">- <?=$cek2['baslik']?></td>

                  <td class="hidden-phone">

				  <?php if($cek2['sira'] != "1"){ ?>
   			      <a href="index.php?page=sayfalar&id=65&islem=yukari&aid=<?=$cek2['id']?>&sira=<?=$cek2['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <?php } if ($cek2['sira'] != $kactanecik2){?>
   				  <a href="index.php?page=sayfalar&id=65&islem=asagi&aid=<?=$cek2['id']?>&sira=<?=$cek2['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <?php } ?>

                    <a href="index.php?page=Urun&git=Fotograf&id=<?=$cek2['id']?>" title="Fotoğraflar" class="btn btn-default active"><i class="fa fa-camera"></i></a>
                                        <a href="index.php?page=Urun&git=Dosya&id=<?=$cek2['id']?>" title="Dosyalar" class="btn btn-default active"><i class="fa fa-folder"></i></a>

                 <a href="index.php?page=Urun&git=Duzenle&id=<?=$cek2['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   <a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek2['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
                  </td>
        </tr><?php }}} ?>

        </tbody>

        </table>

        </div>

        </div>

        </section>
        </div>
        </div>
        </div>
</form>
