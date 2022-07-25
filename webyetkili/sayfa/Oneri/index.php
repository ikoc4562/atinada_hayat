<?php

	if($_GET['islem'] == "sil"){

		$sql = $db->prepare("DELETE FROM oneri WHERE id = :id");
    $sql->execute(['id'=>$_GET['aid']]);
		$mesaj = "Poistettiin";
				}

if($_GET['islem'] == "yukari"){

$eksilt = $_GET['sira'] - "1";

$sss = $db->prepare("SELECT * FROM oneri WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE oneri SET sira=sira-1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE oneri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$bbb['id']]);

	}
	if($_GET['islem'] == "asagi"){

$eksilt = $_GET['sira'] + "1";

$sss = $db->prepare("SELECT * FROM oneri WHERE sira = :sira");
$sss->execute(['sira'=>$eksilt]);
$bbb = $sss->fetchAll();

$sql = $db->prepare("UPDATE oneri SET sira=sira+1 WHERE id=:id");
$sql->execute(['id'=>$_GET['aid']]);
$sql = $db->prepare("UPDATE oneri SET sira=sira-1 WHERE id=:id");
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
            Neuvoja / Viestejä
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
				<th>Nu.</th>
              <th>Lähettäjä</th>
			              <th>Päivämäärä</th>

             <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
     <?php
$i=0;
$sql = $db->query("SELECT * FROM oneri ORDER by id asc");
$variable = $sql->fetchAll();
foreach ($variable as $cek) {
	$i++;
  # code...
//while($cek = mysql_fetch_assoc($sql)){
?>
<tr class="gradeA">
           <td><?=$i?></td>
             <td<?php if ($cek['aktif'] == '0'){?> style="font-weight:bold;"<?php } ?>><?=$cek['adi']?> </td>
	           <td><?=$cek['tarih']?></td>

                   <td class="hidden-phone">

                  <a href="index.php?page=Oneri&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
				  <a href="#" title="Sil" onclick="javascript:if(confirm('Oletko varma poistamaan?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>
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
