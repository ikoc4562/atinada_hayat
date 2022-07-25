<?php
error_reporting(0);
$seourl			= "1";
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "aikatalo";
try {
    $db = new PDO("mysql:host=localhost;dbname=aikatalo;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$kull = $_COOKIE["kull"];
