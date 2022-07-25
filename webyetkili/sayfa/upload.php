<?php
include '../config.php';
include '../lib/lib.php';
include '../class/class.php';

global $db;



$dosyas = new dosyaYonetimi();
$dosyaEkle = new veriTabani();
$dosyaEkle->tabloadi="dosya";

///$dosya -> ($_FILES['file']);




			echo $ekle = $dosyas->dosyaYukle($db,$_FILES[ 'file' ] );
