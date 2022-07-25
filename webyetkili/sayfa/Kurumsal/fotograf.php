<?php

	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM kurumsalgaleri WHERE id = :id");
    $sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Poistettiin";
				}

				if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$sss = $db->prepare("SELECT * FROM kurumsalgaleri WHERE sira = :sira");
$bbb->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE kurumsalgaleri SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE kurumsalgaleri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$sss = $db->prepare("SELECT * FROM kurumsalgaleri WHERE sira = :sira");
$bbb->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE kurumsalgaleri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE kurumsalgaleri SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);
  	}

 ?>

       <form id="sayfalar">

           <div class="row">
        <div class="col-sm-12">
         <div class="wrapper">
  <?php if($mesaj != ""){?>
 <div class="alert alert-success">
 Poistettiin!
</div>
<div class="clear"></div><BR />
<?php }?>
        <section class="panel">
        <header class="panel-heading">
        <?php
		$sql2 = $db->prepare("SELECT * FROM kurumsal WHERE id = :id ORDER by sira ASC");
    $sql2->execute(['id'=>$_GET['id']]);
		$cekk = $sql2->fetchAll();?>

            <?=$cekk[0]['baslik']?> Sivun Kuvat
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>

        </header>

        <div class="panel-body">

          <a href="index.php?page=Kurumsal&git=yeniFoto&id=<?=$_GET['id']?>" class="btn btn-primary btn-lg"> Lisää Uusi Kuva </a>

        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">

        <thead>

        <tr>
        <th></th>
              <th>Otsikko</th>
			  <th>Aktiivinen</th>
			 			  <th>Etusivu?</th>
	
             <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
     <?php
$sql = $db->prepare("SELECT * FROM kurumsalgaleri WHERE kat = :kat ORDER by anasayfa DESC");
$sql->execute(['kat'=>$_GET['id']]);
$variable = $sql->fetchAll();
foreach ($variable as $cek) {
  # code...
//while($cek = mysql_fetch_assoc($sql)){
if($cek['aktif']=='0')
{
	
	$aktif="Ei";
}
 else {
	 $aktif="Joo";
 }
	
if($cek['anasayfa']=='0')
{
	
	$anasayfa="Ei";
}
 else {
	 $anasayfa="Joo";
 }
?>
<tr class="gradeA">
           <td></td>
             <td><img src="../kucult.php?w=200&img=../images/kurumsal/<?=$cek['fotograf']?>" style="padding-right:10px;" /><?=$cek['baslik']?></td>
	   			<td><?=$aktif?></td>
		   			<td><?=$anasayfa?></td>


                  <td class="hidden-phone">
                   <?php if($cek['sira'] != "1"){ ?>
   			      <a href="index.php?page=Kurumsal&git=Fotograf&id=<?=$_GET['id']?>&islem=yukari&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <?php } if ($cek['sira'] != $kactanecik){?>
   				  <a href="index.php?page=Kurumsal&git=Fotograf&id=<?=$_GET['id']?>&islem=asagi&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <?php }?>

	<a href="index.php?page=Kurumsal&git=FotoDuzenle&id=<?=$cek['id']?>&sid=<?=$_GET["id"]?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
	<a href="#" title="Sil" onclick="javascript:if(confirm('oletko varma poistamaan?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
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
