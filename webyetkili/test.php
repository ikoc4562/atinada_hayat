<?php 
	
	include("lib/class.upload.php");
	
					$images = new Upload( 'upload/P0013_281209.jpg' );
		
		
					$dosyaYolu = "upload/ozel/";
					
					$images->image_resize         = true;
					$images->image_x              = 300;
					$images->image_y              = 300;
					$images->image_ratio_crop     = 'L';
					
					$images->Process( $dosyaYolu );		
?>Resim Değiştirldi 