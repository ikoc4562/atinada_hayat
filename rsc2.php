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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  </style>

    <div class="hero-wrap" style="background-image: url('images/odalar/odadetay_banner.jpeg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="etusivu">Etusivu</a></span>/ <span class="mr-2"><a href="huoneita">Huoneita</a></span> </p>
				<h1 class="mb-4 bread">Huoneen Yksityiskohdat</h1>
      </div>
          </div>
        </div>
      </div>
    </div>
		
<br/>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">



      	  <?php			 //oda galeriden gosterilecek ilk resim cekiliyor
				$odag=$db->prepare("SELECT * FROM odagaleri WHERE aktif = '".htmlspecialchars('1')."' and kat=? or kat=99999 limit 1");
			    $odag->execute([$dizi[0]]);
						foreach($odag->fetchAll() as $resultodag){
						?>
      <div class="item active">
        <img src="images/odalar/<?=$resultodag["fotograf"]?>" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
		
		 <?php
						}
							?>
		
      	  <?php			 //oda galeriden gosterilecek ilk resim cekiliyor
				$odag=$db->prepare("SELECT * FROM odagaleri WHERE aktif = '".htmlspecialchars('1')."' and kat=? or kat=99999");
			    $odag->execute([$dizi[0]]);
						foreach($odag->fetchAll() as $resultodag){
						?>
      <div class="item">
        <img src="images/odalar/<?=$resultodag["fotograf"]?>" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
		
		 <?php
						}
							?>
    

  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    

          
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
                                <p>	<script src="https://hotels.cloudbeds.com/widget/load/cPRDZj/vert?newWindow=1"></script></p>
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
    autoplayInterval: 4500,
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
              <div class="icon d-flex justify-content-center">
                <span><img src="images/logo_icon.png"></span>
              </div>
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