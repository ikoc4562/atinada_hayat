<?php
//include("config.php");

	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM slider WHERE id = :id");
		$sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Poistettu";
				}

if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$sss = $db->prepare("SELECT * FROM slider WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE slider SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE slider SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$sss = $db->prepare("SELECT * FROM slider WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE slider SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE slider SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);
  	}
 ?>

       <form id="sayfalar">

           <div class="row">
        <div class="col-sm-12">
         <div class="wrapper">
  <?php if($mesaj != ""){?>
 <div class="alert alert-success">
 Poistettu!
</div>
<div class="clear"></div><BR />
<?php }?>
        <section class="panel">
        <header class="panel-heading">
            slider
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>

        </header>

        <div class="panel-body">

          <a href="index.php?page=slider&git=yeniEkle" class="btn btn-primary btn-lg"> Lisää Uusi slider  </a>

        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">

        <thead>

        <tr>
                    <th>&nbsp;</th>

              <th>Otsikko 1 </th>
			  <th>Otsikko 2 </th>
			  <th>Aktiivinen</th>

			  <th>Kuva </th>



              <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
     <?php
		

$sql = $db->query("SELECT * FROM slider WHERE kat = '0' ORDER by sira desc");
$variable = $sql->fetchAll();
foreach ($variable as $cek) {

$sql2z2 = $db->query("SELECT * FROM slider WHERE kat = '0' ORDER by sira ASC");
$kactanecik = $sql2z2->rowCount();

$sql2 = $db->prepare("SELECT * FROM slider WHERE kat = :kat ORDER by sira ASC");
$sql2->execute(['kat'=>$cek['id']]);
$kactane = $sql2->rowCount();

$sql2z2z = $db->prepare("SELECT * FROM slider WHERE kat = :kat ORDER by sira ASC");
$sql2z2z->execute(['kat'=>$cek['id']]);
$kactanecik2 = $sql2z2z->rowCount();			
	
if($cek['aktif']=='0')
{
	
	$aktif="Ei";
}
 else {
	 $aktif="Joo";
 }

			?>
<tr class="gradeA">
           <td></td>
             <td><?=$cek['baslik']?></td>
			             <td><?=$cek['baslik2']?></td>
				             <td><?=$aktif?></td>

	<td><img src="../../../aikatalo/images/slider/<?=$cek['fotograf']?>" width="75px"></td>

                   <td class="hidden-phone">
                  <?php if($cek['sira'] != "1"){ ?>
   			      <a href="index.php?page=sayfalar&id=96&islem=yukari&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <?php } if ($cek['sira'] != $kactanecik){?>
   				  <a href="index.php?page=sayfalar&id=96&islem=asagi&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <?php }?>

		

                  <a href="index.php?page=slider&git=FotoDuzenle&id=<?=$cek['id']?>&sid=<?=$_GET['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
				  <a href="#" title="Sil" onclick="javascript:if(confirm('oletko varma poistamaan?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
                  </td>
        </tr><?php if($kactane > "0"){ ?>
<?php
$variable = $sql2->fetchAll();
foreach ($variable as $cek2) {
	
if($cek2['aktif']=='0')
{
	
	$aktif2="Ei";
}
 else {
	 $aktif2="Joo";
 }
  # code...
//while($cek2 = mysql_fetch_assoc($sql2)){
?>
<tr class="gradeA">
           <td></td>
             <td style="padding-left:30px;"> <?=$cek2['baslik']?></td>
			             <td style="padding-left:30px;"><?=$cek2['baslik2']?></td>
			             <td style="padding-left:30px;"><?=$aktif2?></td>
	
	             <td style="padding-left:30px;"><img src="../../../aikatalo/images/slider/<?=$cek2['fotograf']?>" width="75px"></td>


                  <td class="hidden-phone">

				  <?php if($cek2['sira'] != "1"){ ?>
   			      <a href="index.php?page=sayfalar&id=96&islem=yukari&aid=<?=$cek2['id']?>&sira=<?=$cek2['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <?php } if ($cek2['sira'] != $kactanecik2){?>
   				  <a href="index.php?page=sayfalar&id=96&islem=asagi&aid=<?=$cek2['id']?>&sira=<?=$cek2['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <?php } ?>
                

                 <a href="index.php?page=slider&git=FotoDuzenle&id=<?=$cek2['id']?>&sid=<?=$_GET['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   <a href="#" title="Sil" onclick="javascript:if(confirm('oletko varma poistamaan?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek2['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
                  </td>
        </tr><?php } } } ?>
        </tbody>

        </table>

        </div>

        </div>

        </section>
        </div>
        </div>
        </div>
</form>
