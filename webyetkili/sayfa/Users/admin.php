<?php
include("../../config.php");

	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM uyeler WHERE id = :id");
    $sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Poistettiin";
				}

if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$uyeler = $db->prepare("SELECT * FROM uyeler WHERE sira = :sira");
$uyeler->execute(['sira'=>$eksilt]);
$bbb = $uyeler->fetchAll();

$sql = $db->prepare("UPDATE uyeler SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE uyeler SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$uyeler = $db->prepare("SELECT * FROM uyeler WHERE sira = :sira");
$uyeler->execute(['sira'=>$eksilt]);
$bbb = $uyeler->fetchAll();

$sql = $db->prepare("UPDATE uyeler SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE uyeler SET sira=sira-1 WHERE id=:id");
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
<div class="clear"></div><br/>
<?php }?>
        <section class="panel">
        <header class="panel-heading">
			Admin Kayttäjät            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>

        </header>

        <div class="panel-body">


        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">

        <thead>

        <tr>
               <th></th>
			   <th>Nimi-Sukunimi</th>

              <th>Sähköposti</th>
              <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
<?php
$sql = $db->query("SELECT * FROM uyeler where durum=1 and id<>1");
$variable = $sql->fetchAll();
foreach ($variable as $cek){
?>
<tr class="gradeA">
           <td style="background-color: #eb2f12"></td>
             <td style="background-color: #eb2f12"><span style="color: aliceblue"><?=$cek['adsoyad']?></span></td>
             <td style="background-color: #eb2f12"><span style="color: aliceblue"><?=$cek['eposta']?></span></td>
                       <td class="hidden-phone">

 				  <a href="index.php?page=Users&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                  </td>
        </tr>
<?php } ?>



        </tbody>

        </table>

        </div>

        </div>

        </section>
        </div>
        </div>
        </div>
</form>
