<?php
include 'header.php';
$page="romms";
?>


    <div class="hero-wrap" style="background-image: url('images/odalar/odabanner.jpeg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="etusivu">Etusivu</a></span> <span>/ Huoneet</span></p>
	            <h1 class="mb-4 bread">Huoneet</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	        <div class="col-lg-9">
		    		<div class="row">
		    	
 <?php
					$veri=0;	
						if($_POST["ispost"]==1){
			
				if($_POST['fiyat']<>"" && $_POST['kisisayisi']<>0){
			$oda12=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and yetiskin=?  and fiyat <= ?");
			$oda12->execute([$_POST['kisisayisi'],$_POST['fiyat']]);
			$resultoda12=$oda12->fetchAll();
			foreach($resultoda12 as $rs){
				$oda11=$db->query("SELECT * FROM odalar WHERE aktif = '".htmlspecialchars('1')."' and otid= '".$rs['id']."'");
				$oda11->execute();
				$res=$oda11->fetchAll();
				foreach($res as $res2){
					$veri++;	
				}
			}
				}
				elseif($_POST['fiyat']<>"" && $_POST['kisisayisi']==0){

			$oda12=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and fiyat <= ?");
			$oda12->execute([$_POST['fiyat']]);
			$resultoda12=$oda12->fetchAll();
			foreach($resultoda12 as $rs){
				$oda11=$db->query("SELECT * FROM odalar WHERE aktif = '".htmlspecialchars('1')."' and otid= '".$rs['id']."'");
				$oda11->execute();
				$res=$oda11->fetchAll();
				foreach($res as $res2){
					$veri++;	
				}
				
				}
							
			
			} // if ispost 
							
							
	
				
				} else {

	  		$oda11=$db->query("SELECT * FROM odalar WHERE aktif = '".htmlspecialchars('1')."'");
			$oda11->execute();
			$oda11->fetchAll();			
			$veri=$oda11->rowcount();				


						}
	
			
			if($veri<1){
				echo '<div class="container">
  
<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Valitettavasti!</strong> Huoneita ei löytynyt. Voit tehdä uuden haun muuttamalla hakuvaihtoehtoja.
</div>
</div>';
			}
			  if($veri>=1){
							
				echo '<div class="container">
  
<div class="alert alert-info">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>'.$veri.'</strong> Huoneita saatavissa.
</div>
</div>';							
						}
						    ?>			
						 <?php
						
                      // odalar bölümü  çekim işlemi - fatihmerickoc.com
							
			$sorguf=$db->query("select min(fiyat) as minf, max(fiyat) as maxf from odatipleri");
			$sorguf->execute();
			$fiyatlar=$sorguf->fetchall();
							
			$kisisayisi="";	
			$fiyat=$fiyatlar[0][1];			
			if($_POST["ispost"]==1){
			

			$kisisayisi=$_POST['kisisayisi'];
			$kisisayisi2=$_POST['kisisayisi']+1;
				//if($kisisayisi==0){
			//		$kisisayisi2=100;
			//	}
			$fiyat=	$_POST['fiyat'];
		  //  $oda=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and yetiskin>=? and yetiskin<=? and fiyat <= ?");		
		 //$oda->execute([$_POST['kisisayisi'],$kisisayisi2,$_POST['fiyat']]);	
			if($_POST['fiyat']<>"" && $_POST['kisisayisi']<>0){
				$oda=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and yetiskin=?  and fiyat <= ? order by id");
			$oda->execute([$_POST['kisisayisi'],$_POST['fiyat']]);	
			}
			
		   elseif($_POST['fiyat']<>"" && $_POST['kisisayisi']==0){
				$oda=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and fiyat <= ? order by id");
			$oda->execute([$_POST['fiyat']]);	
			}
				
						} else {
	  
	  		$oda=$db->query("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' order by fiyat");
			$oda->execute();	


						}
			
			$odalarid=array();
			$i=0;			
			$resultoda=$oda->fetchAll();
			foreach($resultoda as $odalar){
							 
		
							 
							 //oda ust baglisi geliyor, standart,perhe vs..
			$odaust=$db->prepare("SELECT id FROM odalar WHERE aktif = '".htmlspecialchars('1')."' and otid=? order by id");
			$odaust->execute([$odalar['id']]);
				
				
					   
					    foreach($odaust->fetchAll() as $resultodaust){
							$odalarid[$i]=$resultodaust["id"];
							$i++;
							
							
						}
				
			}
						
				array_multisort($odalarid);
								 
				foreach($odalarid as $oid){
				$odaust=$db->prepare("SELECT * FROM odalar WHERE aktif = '".htmlspecialchars('1')."' and id=? order by id");
				$odaust->execute([$oid]);
				$resultodaust=$odaust->fetchAll();
					
				$oda=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and id=? order by id");
				$oda->execute([$resultodaust[0]['otid']]);
				$odalar=$oda->fetchAll();

							 //oda galeriden gosterilecek ilk resim cekiliyor
				$odag=$db->prepare("SELECT * FROM odagaleri WHERE aktif = '".htmlspecialchars('1')."' and anaresim='".htmlspecialchars('1')."' and kat=:kat or kat=99999");
			    $odag->execute(array(':kat' => $resultodaust[0]['otid']));
				$resultodag=$odag->fetchAll();	
							 
							 //oda detay icin url 
if ($seourl == "1"){		 
		  
		 $haberlerseo = str_replace(" ","-",$resultodaust[0]['name']);
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

		  $linkhaberlerkat = $odalar[0]['id']."-".$resultodaust[0]["id"]."-".$haberlerseo.".html";
		   } else $linkhaberlerkat = "room-single.php?&id=".$resultodaust[0]['id'];
		 

							 
						 ?>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="huone-<?=$linkhaberlerkat?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/odalar/<?=$resultodag[0]["fotograf"]?>);">
    					<!--	<div class="icon d-flex justify-content-center align-items-center">
               					 <span><img src="images/logo_icon.png"></span>
    						</div> -->
    					</a>
    					<div class="text p-3 text-center">
    			<h3 class="mb-3"><a href="huone-<?=$linkhaberlerkat?>"><?=$resultodaust[0]["name"]?>:<?=substr($odalar[0]["name"],0,20)?></a></h3>
    						<p><span class="price mr-2"><?=$odalar[0]["fiyat"]?>&nbsp;€</span> <span class="per">per yö</span></p>
    						<hr>
							<ul class="list">
		    							<li><span>Aikuisten:</span><?=$odalar[0]["yetiskin"]?></li>
									    <!--<li><span>Lasta:</span><?=$odalar[0]["cocuk"]?></li>
		    							<li><span>Koko:</span> <?=$odalar[0]["metrekare"]?> nm</li>-->
										<li><span>Sänky:</span> <?=$odalar[0]["yataksayisi"]?></li>

		    							<!--<li><span>Näkymä:</span> <?=$odalar[0]["manzara"]?></li>-->
		    						</ul>
		    						<hr>

    						<a href="huone-<?=$linkhaberlerkat?>" target="_blank" class="tus tus2" style="vertical-align:middle">Yksityiskohdat</a></p>

    					</div>
    				</div>
    			</div>

<?php //}
						
		//				 }// odalar end
							 
				} //array end
					
				?>
		    		</div>
		    	</div>
		    	<div class="col-lg-3 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4" align="center">Tarkennettu Haku</h3>
	      			<form action="#" method="post">
						<input type="hidden" name="ispost" value="1">
	      				<div class="fields">
							
		            <!--  <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="Tulopäivä">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control checkout_date" placeholder="Lähtöpäivä">
		              </div>-->
		              <!--<div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control">
							<?php
							$sorgu=$db->query("select * from odatipleri");
							$sorgu->execute();

							foreach($sorgu->fetchall() as $veri){
							?>
	                    		  <option value="<?=$veri['id']?>"><?=$veri['name']?></option>
	         
							<?php
							}
							?>
	                    </select>
	                  </div>
		              </div>-->
		              <!--<div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="kisisayisi" id="kisisayisi" class="form-control">
	                      <option value="0" <?php if($kisisayisi==0) {?> selected <?php }?>>
							Aikuinen </option>
	                      <option value="1" <?php if($kisisayisi==1) {?> selected <?php }?>>1 </option>
	                      <option value="2" <?php if($kisisayisi==2) {?> selected <?php }?>>2 </option>
	                      <option value="3" <?php if($kisisayisi==3) {?> selected <?php }?>>3 </option>
	                      <option value="4" <?php if($kisisayisi==4) {?> selected <?php }?>>4 </option>
	                      <option value="5" <?php if($kisisayisi==5) {?> selected <?php }?>>5 </option>
	                      <option value="6" <?php if($kisisayisi==6) {?> selected <?php }?>>6 </option>
	                    </select>
	                  </div>
		              </div>-->
		             <!-- <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control">
	                    	<option value="">Lapsia </option>
	                    	<option value="">1 </option>
	                      <option value="">2 </option>
	                      <option value="">3 </option>
	                      <option value="">4 </option>
	                      <option value="">5 </option>
	                      <option value="">6 </option>
	                    </select>
	                  </div>
		              </div>-->
						
		              <div class="form-group">
		              	<div class="range-slider">
  								<input type="range" min="<?=$fiyatlar[0][0]?>" max="<?=$fiyatlar[0][1]?>" value="<?=$fiyat?>" class="slider" id="myRange" name="fiyat">
  								<p>Max. Hinta: <span id="demo"></span></p>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Haku" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>
	      		<div class="sidebar-wrap bg-light ftco-animate" align="center">
						      			<h3 class="heading mb-4" align="center">Varaus</h3>

					<form action="#" method="post">
						<input type="hidden" name="ispost" value="1">
	      				<div class="fields">
							
		              <div class="form-group">
		                <input type="date" id="checkin_date" class="form-control checkin_date" placeholder="Tulopäivä">
		              </div>
		              <div class="form-group">
		                <input type="date" id="checkin_date" class="form-control checkout_date" placeholder="Lähtöpäivä">
		              </div>
	      			<p class="b-button b-button_primary call_to_action--wide js-ph__cta 
"><a href="https://hotels.cloudbeds.com/en/reservas/cPRDZj" target="_blank" class="button button2" style="vertical-align:middle">Varaa</a></p>
						</div>
					</form>
					
					<!--
1: <script src="https://hotels.cloudbeds.com/widget/load/cPRDZj/largeButton?newWindow=1"></script>
2: <script src="https://hotels.cloudbeds.com/widget/load/cPRDZj/button?newWindow=1"></script>

-->
	      			<!--<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>-->
	      		</div> 
	        </div>
		    </div>
    	</div>
    </section>
<?php
		$stmtg=$db->query("SELECT * FROM kurumsalgaleri WHERE aktif = '".htmlspecialchars('1')."' and anasayfa='".htmlspecialchars(0)."' ORDER BY RAND()
LIMIT 4");
		$stmtg->execute();
		//$resultg=$stmtg->fetchAll();
     
              ?>
    

<section class="instagram pt-5">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Kuvat</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
		   <?php
		  foreach($stmtg->fetchAll() as $resultg){
		  ?>	
          <div class="col-sm-7 col-md ftco-animate">
            <a href="images/kurumsal/<?=$resultg["fotograf"]?>" class="insta-img image-popup" style="background-image: url(images/kurumsal/<?=$resultg["fotograf"]?>);">

            </a>
          </div>
			<?php
		  }
		  ?>
        </div>
      </div>
    </section>
	<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<?php
include 'footer.php';

?>

  