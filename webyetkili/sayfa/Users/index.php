<?php

	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM users WHERE id = :id");
    $sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Poistettiin";
				}

if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$users = $db->prepare("SELECT * FROM users WHERE sira = :sira");
$users->execute(['sira'=>$eksilt]);
$bbb = $users->fetchAll();

$sql = $db->prepare("UPDATE users SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE users SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$users = $db->prepare("SELECT * FROM users WHERE sira = :sira");
$users->execute(['sira'=>$eksilt]);
$bbb = $users->fetchAll();

$sql = $db->prepare("UPDATE users SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE users SET sira=sira-1 WHERE id=:id");
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
           Käyyttäjät
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>

        </header>

        <div class="panel-body">


        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">

        <thead>

        <tr>
                    <th>&nbsp;</th>

              <th>Sähköposti</th>
               <th>Rekistöröida päivä</th>
             <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
<?php
$sql = $db->query("SELECT * FROM users WHERE aktif = '1' ORDER by tarih DESC");
$variable = $sql->fetchAll();
foreach ($variable as $cek){
  # code...
//while($cek = mysql_fetch_assoc($sql)){
?>
<tr class="gradeA">
           <td></td>
             <td><?=$cek['email']?></td>
             <td><?=$cek['tarih']?></td>
                   <td class="hidden-phone">

 				  <a href="index.php?page=Users&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
				  <a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
                  </td>
        </tr><?php if($kactane > "0"){ ?>
<?php
$variable = $sql2->fetchAll();
foreach ($variable as $cek2) {
  # code...
//while($cek2 = mysql_fetch_assoc($sql2)){
?><?php } } } ?>

        </tbody>

        </table>

        </div>

        </div>

        </section>
        </div>
        </div>
        </div>
</form>
