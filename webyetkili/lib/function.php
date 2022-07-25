<?php
function hata ($hata) {
	
	echo '<div class="alert alert-block alert-danger fade in">
                                <button type="button" class="close close-sm" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>HATA !</strong> '.$hata.'.
                            </div>';
	
}

function seolink($text){
	$gkod = array(" ","<",">","ş","ı","ğ","ü","ö","ç","Ç","Ğ","Ü","İ","Ö");
	$dkod = array("-","-","-","s","i","g","u","o","c","c","g","u","i","o");

	$ykod = str_replace($gkod,$dkod,$text);
	return $ykod;
}