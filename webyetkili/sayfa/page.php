<?php
include '../config.php';
include '../lib/lib.php';
include '../class/class.php';

global $db;

$adminsayfa = new adminSayfa();
$sayfa =  $adminsayfa->adminTekveri($db,"include", $_POST['id']);
include ("../".$sayfa);
