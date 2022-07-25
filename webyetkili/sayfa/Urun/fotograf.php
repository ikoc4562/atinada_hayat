<?php

	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM urungaleri WHERE id = :id");
    $sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Başarıyla Silindi";
				}

				if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$sss = $db->prepare("SELECT * FROM urungaleri WHERE sira = :sira");
$sss->execute(['sira']);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE urungaleri SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE urungaleri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$sss = $db->prepare("SELECT * FROM urungaleri WHERE sira = :sira");
$sss->execute(['sira']);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE urungaleri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE urungaleri SET sira=sira-1 WHERE id=:id");
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
        <?php
		$sql2 = $db->prepare("SELECT * FROM urun WHERE id = :id ORDER by sira ASC");
    $sql2->execute(['id'=>$_GET['id']]);
		$cekk = $sql2->fetchAll();?>

            <?=$cekk[0]['baslik']?> Sayfası Fotoğrafları
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>

        </header>

        <div class="panel-body">

          <a href="index.php?page=Urun&git=yeniFoto&id=<?=$_GET['id']?>" class="btn btn-primary btn-lg"> Yeni Ekle </a>

        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">

        <thead>

        <tr>
        <th></th>
              <th>Fotoğraf adı </th>
             <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     <?php
$sql = $db->prepare("SELECT * FROM urungaleri WHERE kat = :kat ORDER by sira ASC");
$sql->execute(['kat'=>$_GET['id']]);
$variable = $sql->fetchAll();
foreach ($variable as $cek) {
  # code...
//while($cek = mysql_fetch_assoc($sql)){

?>
<tr class="gradeA">
           <td></td>
             <td><img src="../kucult.php?w=200&img=../images/urun/<?=$cek['fotograf']?>" style="padding-right:10px;" /><?=$cek['baslik']?></td>

                  <td class="hidden-phone">
                   <?php if($cek['sira'] != "1"){ ?>
   			      <a href="index.php?page=Urun&git=Fotograf&id=<?=$_GET['id']?>&islem=yukari&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <?php } if ($cek['sira'] != $kactanecik){?>
   				  <a href="index.php?page=Urun&git=Fotograf&id=<?=$_GET['id']?>&islem=asagi&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <?php }?>

	<a href="index.php?page=Urun&git=FotoDuzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
	<a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
                  </td>
        </tr><?php } ?>

        </tbody>

        </table>

        </div>

        </div>

        </section>
        </div>
        </div>
        </div>
</form>
