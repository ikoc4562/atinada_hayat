<?php
class dosyaYonetimi {



	public function dosyaYukle($db,$files,$dosyaYolu=NULL){

		$image = new Upload( $files );
			if ( $image->uploaded ) {

				if($dosyaYolu==true){
					$dosyaYolu = "../upload/".$dosyaYolu.'/';

				$image->Process(  $dosyaYolu);
				}
				else{
				$dosyaYolu = "../upload/";
					$image->Process( $dosyaYolu );





				}

		$tool = new tools();


		$urll=$tool->qir ("../",$dosyaYolu.$image->file_dst_name);


		 $uzanti = end(explode(".",$image->file_dst_name));

	$ekel = $db->query("insert into dosya (dosya,tur,kid,url) values ('$image->file_dst_name','$uzanti','$_POST[kid]','$urll') ");


		}


	}

	/*
	public function dosyaBoyut ($files , $width, $height=NULL){
		$image = new Upload( $files );


					$dosyaYolu = "upload/ozel/";
					$image->Process( $dosyaYolu );

				if($height==""){
					$image->image_resize          = true;
					$image->image_ratio_x         = true;
					$image->image_y               = $width;

				}else{

					$image->image_resize          = true;
					$image->image_ratio_crop      = 'L';
					$image->image_y               = $width;
					$image->image_x               = $height;

				}







		}*/


		public function dosyaBoyut ($files , $width, $height=NULL,$id=NULL){
					$dosyaEkle = new veriTabani();
					$dosyaEkle -> tabloadi="dosya_crop";

					$images = new Upload( '../'.$files );



					$dosyaYolu = "../upload/ozel/";
					if($height==""){

						$images->image_resize          = true;
						$images->image_ratio_x         = true;
						$images->image_y               = $width;
						//$images->image_ratio_crop     = 'L';
					}else{
						$images->image_resize          = true;
						$images->image_y               = $width;
						$images->image_x               = $height;
						//$images->image_ratio_crop     = 'L';

					}
						$images->Process( $dosyaYolu );

					$tool = new tools();


					return $urll=$tool->qir ("../",$dosyaYolu.$images->file_dst_name);

					$dosyavarmi = $dosyaEkle->tekveri("url",$id);


		}



	public  function menuListe($db,$id=0,$string=0){
		
		$sql_kat = $db->prepare("select * from dosya_kategori where ustid=:id");
		$sql_kat->execute(['id'=>$id]);


		if($sql_kat->rowCount()>0){
			$variable = $sql_kat->fetchAll();
			foreach ($variable as $tabloValue) {
				# code...
			//while ($tabloValue = mysql_fetch_array($sql_kat)){

				if($tabloValue['durum']==0){
					$durum = "Pasif";
				}else {
					$durum="Aktif";
				}


				echo '  <li ><a id="'.$tabloValue['id'].'" class="dosyaKatListele" href="#">'.str_repeat("# ", $string).$tabloValue['adi'].'</a></li>';





				$this->menuListe($db,$tabloValue['id'],$string+1);
			}



		}else {

			return false;
		}

	}


}
