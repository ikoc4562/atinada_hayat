<?php
class tools{
	
	//Klasor Listeleme  medhotu 
	// örnek $tools->dosya("tema",'<li class="23">','</li>');
	public function dosya($yolu,$tagAc=NULL, $tagKapat=NULL){
		
		$dir = opendir($yolu);
		
		while (($dosya = readdir($dir)) !== false){
			
			if(! is_dir($dosya)){ // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..
			
				echo $tagAc .$dosya. $tagKapat; // Ekrana Yazdırıyoruz..
			}
		}
		closedir($dir);
		
		
	}
	

		public function qir ($degisecek,$text){
			
				$gkod = array($degisecek);
				$dkod = array("");

					$ykod = str_replace($gkod,$dkod,$text);
						return $ykod;

		}


	
	public function resimAdi($dosya,$en=NULL,$boy=NULL,$dosyaYolu=NULL){
		
		$image = new Upload( $dosya );
			$image->file_new_name_body = $en.'_'.$boy;
			$image->image_resize        = true;
			$image->image_ratio_x       = true;
			$image->image_y             = $en;
			$foo->image_x             	= $boy;
		if($dosya==true){
			
			$image->Process( "../upload/".$dosyaYolu."/" );
		}else{	
			$image->Process( "../upload/" );
			}
			
		return $image->file_dst_name;	
			
				
	}

	

	
}