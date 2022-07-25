<?php

include "../ayarlar.php";

if ($_GET['tablo'] == "urunler"){

$resim   = "../images/$_GET['yol']/$_GET['fotograf']"; // resim yolu
@unlink($resim);

$db->query("UPDATE ".$_GET['tablo']." SET ".$_GET['foto']." = '' WHERE id = '".$_GET['id']."'");

	echo "<script>alert(\"Fotograf Silindi!\");</script><script>window.location='index.php?page=urun&git=urunDuzenle&id=".$_GET['id']."';</script>";
}

?>
