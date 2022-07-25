<?php

ob_start();
include("aktarimlar.php");

if(empty($_COOKIE['kullanici'])){

  include("tema/anatol/login.php");

}

else

{
  include("tema/anatol/index.php");
 }
?>
