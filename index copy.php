<meta name="Description" content="Aikatalon hostelli sijaitsee aivan Helsingin keskustassa, päärautatieaseman välittömässä läheisyydessä, josta on hyvät yhteydet julkisia kulkuvälineitä käyttäen mm. lentoasemalle ja muualle Suomeen sekä Venäjälle…">
<?php
include 'header.php';
$page="index";
?>

<?php

$bugun = date("d-m-Y");
$yarin = strtotime('1 day',strtotime($bugun));
$yarin=date("d-m-Y",$yarin);

if($_POST['ispost']){
	
$tarih11=$_POST['tarih1'];
$tarih22=$_POST['tarih2'];
$tarih1= date("Y-m-d", strtotime($tarih11));
$tarih2= date("Y-m-d", strtotime($tarih22));;
$link="https://hotels.cloudbeds.com/en/reservas/cPRDZj?ga_sess_id=516874476.1578667870#checkin=$tarih1&checkout=$tarih2";
header("location:$link");

//echo '<meta http-equiv="refresh" content="0;'.$link.'" />';

}
?>

	    </section>
    

    <section class="home-slider owl-carousel">
		  <?php
                      // slider bölümü  çekim işlemi - fatihmerickoc.com
	  
	  		$stmt=$db->query("SELECT * FROM slider WHERE aktif = '".htmlspecialchars('1')."'");

			$stmt->execute();

			$result=$stmt->fetchAll();
	  		
	        
			foreach ($result as $cek) {

             // $page = "haberler";
             // $linkhaberlerkat = $clss->filtre($cekhaberler,$seourl,$page);
              
              
              ?>
      <div class="slider-item" style="background-image:url(images/slider/<?=$cek['fotograf']?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3"><?=$cek['baslik']?></h1>
	            <h2><?=$cek['baslik2']?></h2>
            </div>
          </div>
        </div>
        </div>
      </div>

<?php
			}
				?>
    </section>

<?php
if($_POST['ispost']){
	
include('booking.php')	;
}
?>

    <section class="ftco-booking">
    	<div class="container" align="center">
    		<div class="row">
    			<div class="col-lg-10">
    				<form action="#" class="booking-form" method="post">
					<input type="hidden" name="ispost" value="1">	
	        		<div class="row">
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Tulopäivä</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Päivä" name="tarih1" value="<?=$bugun?>">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Lähtöpäivä</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Päivä" name="tarih2" value="<?=$yarin?>">
			    				</div>
			    				</div>
	        			</div>
	        			<!--<div class="col-md-2 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Huoneet</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="odasayisi" id="" class="form-control">
			                      <option value="1">1</option>
			                      <option value="2">2</option>
			                      <option value="3">3</option>
			                      <option value="4">4</option>
			                      <option value="5">5</option>
			                      <option value="6">6</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>-->
	        		<!--	<div class="col-md d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Aikuisia</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="kisisayisi" id="" class="form-control">
			                    	<option value="1">1</option>
			                      <option value="2">2</option>
			                      <option value="3">3</option>
			                      <option value="4">4</option>
			                      <option value="5">5</option>
			                      <option value="6">6</option>
								  <option value="7">7</option>
			                      <option value="8">8</option>
			                      <option value="9">9</option>
			                      <option value="10">10</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
						<div class="col-md d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Lapsia</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="cocuksayisi" id="" class="form-control">
								  <option value="0">0</option>
			                      <option value="1">1</option>
			                      <option value="2">2</option>
			                      <option value="3">3</option>
			                      <option value="4">4</option>
			                      <option value="5">5</option>
			                      <option value="6">6</option>
								  <option value="7">7</option>
			                      <option value="8">8</option>
			                      <option value="9">9</option>
			                      <option value="10">10</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div> -->
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <input type="submit" value="Hae" class="btn btn-primary py-3 px-4 align-self-stretch">
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>

<section class="ftco-section" id="palvelu">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">24/7 Palvelu</h3>
                <p>Päivittäinen siivous,
Yhteinen oleskelutila / TV-alue,
Matkalaukkujen säilytys,
Nopea sisään- / uloskirjautuminen,
24h-vastaanotto</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Yleistä</h3>
                <p>Ilmastointi,
Lämmitys,
Äänieristetyt huoneet,
Hissi,
Perhehuoneita,
Kaikki huoneet savuttomia,
					Ilmainen Wi-Fi koko hostellissa,
				  Puhumme englantia ja suomea</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Pysäköinti</h3>
                <p>Julkinen pysäköinti on mahdollista lähistöllä (varaus ei ole mahdollista) ja se maksaa 6 EUR / tunti.

Parkkihalli,
Turvallinen pysäköinti</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Esteettömyys</h3>
                <p> Pääsy pyörätuolilla, WC jossa käsituet, Hätänaru kylpyhuoneessa </p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
      <?php
                      // about us bölümü  çekim işlemi - fatihmerickoc.com
	  
	  		$stmt=$db->query("SELECT * FROM kurumsal WHERE aktif = '".htmlspecialchars('1')."' and id='".htmlspecialchars('10')."' limit 1");

			$stmt->execute();

			$result=$stmt->fetchAll();

			$stmtg=$db->query("SELECT * FROM kurumsalgaleri WHERE aktif = '".htmlspecialchars('1')."' and kat='".htmlspecialchars($result[0]["id"])."' and anasayfa='".htmlspecialchars(1)."' limit 1");

			$stmtg->execute();

			$resultg=$stmtg->fetchAll();
	  		
	        
                    //while($cekhaberler = mysql_fetch_assoc($haberlercek)){

             // $page = "haberler";
             // $linkhaberlerkat = $clss->filtre($cekhaberler,$seourl,$page);
              
              
              ?>

    <section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/kurumsal/<?=$resultg[0]["fotograf"]?>);">
						
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	<span class="subheading"><?=$result[0]["baslik"]?>

</span>
		            <h2 class="mb-4"><?=$result[0]["baslik2"]?></h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p><?=$result[0]["icerik"]?></p>
							<ul class="ftco-social d-flex">
               
				<!--<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
              </ul>
						</div>
					</div>
				</div>
			</div>
		</section>



    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Huoneemme</h2>
          </div>
        </div>    		
    		<div class="row">
				     <?php
                      // odalar bölümü  çekim işlemi - fatihmerickoc.com
	  
	  		$oda=$db->query("SELECT * FROM odalar WHERE aktif = '".htmlspecialchars('1')."' order by id");

			$oda->execute();

			$resultoda=$oda->fetchAll();
						 foreach($resultoda as $odalar){
							 
							 //oda ust baglisi geliyor, standart,perhe vs..
			$odaust=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and id=?");
			$odaust->execute([$odalar['otid']]);
			$resultodaust=$odaust->fetchAll();
							 
							 //oda galeriden gosterilecek ilk resim cekiliyor
				$odag=$db->prepare("SELECT * FROM odagaleri WHERE aktif = '".htmlspecialchars('1')."' and anaresim='".htmlspecialchars('1')."' and kat=:kat or kat=99999");
			    $odag->execute(array(':kat' => $odalar['otid']));
				$resultodag=$odag->fetchAll();	
							 
							 //oda detay icin url 
if ($seourl == "1"){		 
		  
		 $haberlerseo = str_replace(" ","-",$odalar['name']);
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
     	  $linkhaberlerkat = $resultodaust[0]["id"]."-".$odalar["id"]."-".$haberlerseo.".html";

		   } else $linkhaberlerkat = "room-single.php?&id=".$odalar['id'];
		 

							 
						 ?>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="huone-<?=$linkhaberlerkat?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/odalar/<?=$resultodag[0]["fotograf"]?>);">
    					<!--	<div class="icon d-flex justify-content-center align-items-center">
               					 <span><img src="images/logo_icon.png"></span>
    						</div> -->
    					</a>
    					<div class="text p-3 text-center">
    			<h3 class="mb-3"><a href="huone-<?=$linkhaberlerkat?>"><?=$odalar['name']?>:<?=$resultodaust[0]["name"]?></a></h3>
    						<p><span class="price mr-2"><?=$resultodaust[0]["fiyat"]?>&nbsp;€</span> <span class="per">per yö</span></p>
    						<hr>
							
    						<!--<p class="b-button b-button_primary 
call_to_action--wide js-ph__cta 
"><a href="huone-<?=$linkhaberlerkat?>" target="_blank" class="tus tus2" style="vertical-align:middle">Yksityiskohdat</a></p>-->
							<!--<script src="https://hotels.cloudbeds.com/widget/load/cPRDZj/button?newWindow=1"></script>-->
							<p class="b-button b-button_primary call_to_action--wide js-ph__cta 
"><a href="https://hotels.cloudbeds.com/en/reservas/cPRDZj" target="_blank" class="button button2" style="vertical-align:middle">Varata</a></p>
    					</div>
						
    				</div>
    			</div>

<?php } // odalar end
				?>
    		</div>
    	</div>
    </section>

   <!-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/slider1.jpg);" >
    	<div class="container" >
    		<div class="row justify-content-center" >
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="375">0</strong>
		                <span>Iloisia vieraita</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="11">0</strong>
		                <span>Huoneita</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4">0</strong>
		                <span>Henkilökunta</span>
		              </div>
		            </div>
		          </div>
		        <!--  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="13">0</strong>
		                <span>Määränpää</span>
		              </div>
		            </div>
		          </div> -->
		     <!--   </div>
	        </div>
        </div>
    	</div>
    </section> -->

	<!-- Facts --> 
	
	<!-- End Facts --> 
   <!-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpeg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">ihana paikka...</p>
		                    <p class="name">Isa KOC</p>
		                    <span class="position">Vieras</span>
		                  </div>
		                </div>
		              </div>

		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpeg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">kommentti tulee</p>
		                    <p class="name">Burcu</p>
		                    <span class="position">Vieras</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpeg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">kommentti tulee</p>
		                    <p class="name">CNK</p>
		                    <span class="position">Vieras</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpeg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">kommentti tulee</p>
		                    <p class="name">FMK</p>
		                    <span class="position">Vieras</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section> -->
<?php
		$stmtg=$db->query("SELECT * FROM kurumsalgaleri WHERE aktif = '".htmlspecialchars('1')."' and anasayfa='".htmlspecialchars(0)."' ORDER BY RAND()
LIMIT 6");
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
             <!-- <div class="icon d-flex justify-content-center">
                <span><img src="images/logo_icon.png"></span>
              </div> -->
            </a>
          </div>
			<?php
		  }
		  ?>
        </div>
      </div>
    </section>

<?php
include 'footer.php';

?>