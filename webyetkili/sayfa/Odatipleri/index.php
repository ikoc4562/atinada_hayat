<?php
//include("../../config.php");

	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM odatipleri WHERE id = :id");
    $sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Poistettiin.";
		
		$sql = $db->prepare("UPDATE odalar SET aktif=0 WHERE otid=:id");
$sql->execute(['id'=>$_GET['aid']]);
				}

if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$sss = $db->prepare("SELECT * FROM odatipleri WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE odatipleri SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE odatipleri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$sss = $db->prepare("SELECT * FROM odatipleri WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE odatipleri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE odatipleri SET sira=sira-1 WHERE id=:id");
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
            Huoneita Typpi
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>

        </header>

        <div class="panel-body">

          <a href="index.php?page=Odatipleri&git=yeniEkle" class="btn btn-primary btn-lg"> Lisää uusi</a>

        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">

        <thead>

        <tr>
                    <th>ID</th>

              <th>Huone Typpi</th>
			  <th>Hinta</th>
			  <th>Aikuisin</th>
			  <th>Lasta</th>
			  <th>Sänky</th>
			  <th>Selitys</th>

			  <th>Aktiviinen</th>

              <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
     <?php
$sql = $db->query("SELECT * FROM odatipleri  ORDER by sira desc");
$variable = $sql->fetchAll();
foreach ($variable as $cek){
  # code...
//while($cek = mysql_fetch_assoc($sql)){

$sql2z2 = $db->query("SELECT * FROM odatipleri  ORDER by sira desc");
$kactanecik = $sql2z2->rowCount();

$sql2 = $db->query("SELECT * FROM odatipleri  ORDER by sira desc");
$sql2->execute();
$kactane = $sql2->rowCount();

$sql2z2z = $db->query("SELECT * FROM odatipleri   ORDER by sira desc");
$sql2z2z->execute();
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
           <td><?=$cek['id']?></td>
             <td><?=$cek['name']?></td>
	         <td><?=$cek['fiyat']?></td>
              <td><?=$cek['yetiskin']?></td>
             <td><?=$cek['cocuk']?></td>
	             <td><?=$cek['yataksayisi']?></td>
	             <td><?=$cek['aciklama']?></td>



	             <td><?=$aktif?></td>

                   <td class="hidden-phone">
   

				  <a href="index.php?page=Odatipleri&git=Fotograf&id=<?=$cek['id']?>" title="Fotoğraflar" class="btn btn-default active"><i class="fa fa-camera"></i></a>
                                              

                  <a href="index.php?page=Odatipleri&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
				  <a href="#" title="Sil" onclick="javascript:if(confirm('oletko varma poistamaan?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
                  </td>
        </tr><?php if($kactane > "0"){ ?>
<?php
} } ?>

        </tbody>

        </table>

        </div>

        </div>

        </section>
        </div>
        </div>
        </div>
</form>
