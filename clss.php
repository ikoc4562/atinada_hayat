<?php
/**
 *
 */
class Clss{

  function __construct(){
    # code...
  }

  function test(){
      echo "deneme başarılı";
  }

  function filtre($row,$seourl,$page){
    if ($seourl == "1"){
   		 $haberlerseo = str_replace(" ","-",$row['baslik']);
   		 $haberlerseo = str_replace("ş","s",$haberlerseo);
   		 $haberlerseo = str_replace("ı","i",$haberlerseo);
   		 $haberlerseo = str_replace("ğ","g",$haberlerseo);
   		 $haberlerseo = str_replace("ç","c",$haberlerseo);
   		 $haberlerseo = str_replace("ö","o",$haberlerseo);
   		 $haberlerseo = str_replace("ü","u",$haberlerseo);
   		 $haberlerseo = str_replace("A","a",$haberlerseo);
   		 $haberlerseo = str_replace("B","b",$haberlerseo);
   		 $haberlerseo = str_replace("C","c",$haberlerseo);
   		 $haberlerseo = str_replace("Ç","c",$haberlerseo);
   		 $haberlerseo = str_replace("D","d",$haberlerseo);
   		 $haberlerseo = str_replace("E","e",$haberlerseo);
   		 $haberlerseo = str_replace("F","f",$haberlerseo);
   		 $haberlerseo = str_replace("G","g",$haberlerseo);
   		 $haberlerseo = str_replace("Ğ","g",$haberlerseo);
   		 $haberlerseo = str_replace("H","h",$haberlerseo);
   		 $haberlerseo = str_replace("I","i",$haberlerseo);
   		 $haberlerseo = str_replace("İ","i",$haberlerseo);
   		 $haberlerseo = str_replace("J","j",$haberlerseo);
   		 $haberlerseo = str_replace("K","k",$haberlerseo);
   		 $haberlerseo = str_replace("L","l",$haberlerseo);
   		 $haberlerseo = str_replace("M","m",$haberlerseo);
   		 $haberlerseo = str_replace("N","n",$haberlerseo);
   		 $haberlerseo = str_replace("O","o",$haberlerseo);
   		 $haberlerseo = str_replace("Ö","o",$haberlerseo);
   		 $haberlerseo = str_replace("P","p",$haberlerseo);
   		 $haberlerseo = str_replace("R","r",$haberlerseo);
   		 $haberlerseo = str_replace("S","s",$haberlerseo);
   		 $haberlerseo = str_replace("Ş","s",$haberlerseo);
   		 $haberlerseo = str_replace("T","t",$haberlerseo);
   		 $haberlerseo = str_replace("U","u",$haberlerseo);
   		 $haberlerseo = str_replace("Ü","u",$haberlerseo);
   		 $haberlerseo = str_replace("V","v",$haberlerseo);
   		 $haberlerseo = str_replace("Y","y",$haberlerseo);
   		 $haberlerseo = str_replace("Z","z",$haberlerseo);
   		 $haberlerseo = str_replace("W","w",$haberlerseo);
   		 $haberlerseo = str_replace("X","x",$haberlerseo);
   		 $haberlerseo = str_replace("Q","q",$haberlerseo);
   		 $haberlerseo = str_replace(";","-",$haberlerseo);
   		 $haberlerseo = str_replace(":","-",$haberlerseo);
   		 $haberlerseo = str_replace(",","-",$haberlerseo);
   		 $haberlerseo = str_replace("(","-",$haberlerseo);
   		 $haberlerseo = str_replace(")","-",$haberlerseo);
   		 $haberlerseo = str_replace("´","-",$haberlerseo);
   		 $haberlerseo = str_replace("/","-",$haberlerseo);
   		 $haberlerseo = str_replace(".","-",$haberlerseo);
   		 $haberlerseo = str_replace("?","-",$haberlerseo);
   		 $haberlerseo = str_replace("+","-",$haberlerseo);
   		 $haberlerseo = str_replace("|","-",$haberlerseo);
   		 $haberlerseo = str_replace("â","a",$haberlerseo);
   		 $haberlerseo = str_replace("Â","a",$haberlerseo);
   		 $haberlerseo = str_replace("û","u",$haberlerseo);
   		 $haberlerseo = str_replace("Û","u",$haberlerseo);
   		 $haberlerseo = str_replace("î","i",$haberlerseo);
   		 $haberlerseo = str_replace("Î","i",$haberlerseo);
   		 $haberlerseo = str_replace("&","-",$haberlerseo);
   		 $haberlerseo = str_replace("'","-",$haberlerseo);
   		 $haberlerseo = str_replace("<","-",$haberlerseo);
   		 $haberlerseo = str_replace(">","-",$haberlerseo);


   		 $acc = str_replace(" ","-",$line['aciklama']);

 		   $linkhaberlerkat = $row['id']."-".$haberlerseo.".html";
 		} else $linkhaberlerkat = $page.".php?&id=".$row['id'];

    return $linkhaberlerkat;
  }


}

 ?>
