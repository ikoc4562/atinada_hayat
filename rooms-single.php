<?php
include 'ayarlar.php';
include 'header.php';
$page="rooms-single";

$val = htmlspecialchars($_GET['id']);
$dizi = explode ("-",$val);


?>
<?php
		  		$oda=$db->prepare("SELECT * FROM odalar WHERE aktif = '".htmlspecialchars('1')."' and id=:val");

				//$oda->execute([$val]);
				$oda->execute(['val'=>$dizi[1]]);

				$resultoda=$oda->fetchAll();
							 
							 //oda ust baglisi geliyor, standart,perhe vs..
				$odaust=$db->prepare("SELECT * FROM odatipleri WHERE aktif = '".htmlspecialchars('1')."' and id=?");
				$odaust->execute([$dizi[0]]);
				$resultodaust=$odaust->fetchAll();
							 
			
							 
							 ?>
<style>


* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
  alignment-baseline: center;	
}




/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}


/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
	

}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>


<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 25%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
    <div class="hero-wrap" style="background-image: url('images/odalar/odadetay_banner.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">

    <div class="text">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="etusivu">Etusivu</a></span>
            <span class="mr-2"><a href="huoneita">/ Yksityiskohdat</a></span>
        </p>
        <h1 class="mb-4 bread">Huoneen Yksityiskohdat</h1>
    </div>
    </div>
    </div>
    </div>
    </div>

    <br/>
<div class="container" align="center">

    
	  	<?php			 //oda galeriden gosterilecek ilk resim cekiliyor
				$odag=$db->prepare("SELECT * FROM odagaleri WHERE aktif = '".htmlspecialchars('1')."' and kat=? or kat=99999");
			    $odag->execute([$dizi[0]]);
						foreach($odag->fetchAll() as $resultodag){
						?>
	  <div class="mySlides" >
	  <!--<div class="numbertext">1 / 6</div>-->
    <img class="slider_new" src="images/odalar/<?=$resultodag["fotograf"]?>">
	    </div>
	  	<?php
						}
							?>



  <div class="caption-container" align="center">
    <p id="caption"></p>
  </div>
 <div class="row" style="padding-left: 25%; height: 80%" >
	  	<?php			 //oda galeriden gosterilecek ilk resim cekiliyor
				$odag=$db->prepare("SELECT * FROM odagaleri WHERE aktif = '".htmlspecialchars('1')."' and kat=? or kat=99999");
			    $odag->execute([$dizi[0]]);
	  $i=0;
						foreach($odag->fetchAll() as $resultodag){
							$i++;
						?>
    <div class="column">
      <img class="demo cursor" src="images/odalar/<?=$resultodag["fotograf"]?>" style="width:95%; height: 70%" onclick="currentSlide(<?=$i?>)" alt="<?=$resultoda[0]['name'] ?>:<?=$resultodaust[0]['name'] ?>">
    </div>
					<?php
						}
							?>

  </div>


</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    

          
 <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
    						
    					
						
					
					<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
				    <link href="dist/skeletabs.min.css" rel="stylesheet" type="text/css">
					
<div class="container">
<div id="skltbsResponsive" class="skltbs">
                        <ul role="tablist" class="skltbs-tab-group">
                            <li role="presentation" class="skltbs-tab-item">
                                <a role="tab" class="skltbs-tab" href="#skltbsResponsive1">Tietoa Huoneesta
</a>
                            </li>
                            <li role="presentation" class="skltbs-tab-item">
                                <a role="tab" class="skltbs-tab" href="#skltbsResponsive2">Huoneen mukavuudet</a>
                            </li>
                            <li role="presentation" class="skltbs-tab-item">
                                <a role="tab" class="skltbs-tab" href="#skltbsResponsive3">Varaus</a>
                            </li>
                           
                        </ul>
                        <div class="skltbs-panel-group">
                            <div role="tabpanel" id="skltbsResponsive1" class="skltbs-panel">
                                <p>	
								<div style="overflow-x:auto;">
									  <table>

										<tr>
										  <td>HINTA</td>
										  <td><?=$resultodaust[0]['fiyat'] ?>€ per yö</td>

										</tr>
									 <tr>
										  <td>Aikuisten</td>
										  <td><?=$resultodaust[0]['yetiskin'] ?></td>

										</tr>
										  <tr>
										  <td>Lasta</td>
										  <td><?=$resultodaust[0]['cocuk'] ?></td>

										</tr> <tr>
										  <td>Näkymä</td>
										  <td><?=$resultoda[0]['manzara'] ?></td>

										</tr> <tr>
										  <td>Sänky</td>
										  <td><?=$resultodaust[0]['yataksayisi'] ?></td>

										</tr> <tr>
										  <td>Koko</td>
										  <td><?=$resultoda[0]['metrekare'] ?> nm</td>

										</tr>

									  </table>
									</div>
								
								
								</p>
                            </div>
                            <div role="tabpanel" id="skltbsResponsive2" class="skltbs-panel">
                                <p><?=$resultodaust[0]['aciklama'] ?></p>
                            </div>
                            <div role="tabpanel" id="skltbsResponsive3" class="skltbs-panel">
                                <p>	<!--<script src="https://hotels.cloudbeds.com/widget/load/cPRDZj/vert?newWindow=1"></script>-->
									      		<div class="sidebar-wrap bg-light ftco-animate" align="center">
	
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
"><a href="https://hotels.cloudbeds.com/en/reservas/cPRDZj" target="_blank" class="button button2" style="vertical-align:middle">Varata</a></p>
						</div>
					</form>
								</div>
								</p>
                            </div>
                        
                        </div>
                    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="dist/skeletabs.min.js"></script>
<script>
$("#skltbsResponsive").skeletabs({
	equalHeights: true,
	animation: "fade-scale",
	autoplay: true,
    autoplayInterval: 10000,
    responsive: {
    breakpoint: 800,
    headingTagName: "h4"
    }
    });
    </script>


    </div>

<?php
		$stmtg=$db->query("SELECT * FROM kurumsalgaleri WHERE aktif = '".htmlspecialchars('1')."' and anasayfa='".htmlspecialchars(0)."' ORDER BY RAND()
LIMIT 5");
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

    
  <?php
include 'footer.php';

?>