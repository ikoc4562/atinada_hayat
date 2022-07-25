<?php
include 'ayarlar.php';
include 'header.php';
$page="about";


?>

    <div class="hero-wrap" style="background-image: url('images/kurumsal/hakkinda.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="etusivu">Etusivu</a></span> <span>/ Yritystiedot</span></p>
	            <h1 class="mb-4 bread">Yritystiedot</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    


    

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
               <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
              </ul>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">

		<div class="property_page_surroundings_block " bis_skin_checked="1">

<div class="
hp-poi-content-container hp-poi-content-container--column clearfix  " bis_skin_checked="1">
<div class="
hp-poi-content-section
closest-landmarks
hp-poi-content-section__wrapper" bis_skin_checked="1">
<h3 class="hp-poi-list__heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Lähimmät maamerkit *
</font></font></h3>
<ul class="bui-list bui-list--text hp-poi-list__wrapper" style="margin-top: -15px;">
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Ateneumin taidemuseo - 0.1 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Aleksanterinkatu - 0.1 km
</font></font></div>
</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Stockmann-tavaratalo - 0.2 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Kinopalatsin elokuvateatterikompleksi - 0.2 km
</font></font></div>

</div>
</li>

<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsingin keskusrautatieasema – 0.2 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Ruotsalainen teatteri - 0.3 km
</font></font></div>

</div>
</li>

<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsingin yliopisto - 0.3 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Esplanadin puisto - 0.3 km
</font></font></div>

<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsingin keskustakirjasto Oodi – 0.7 km
</font></font></div>

</div>
</li>
</ul>
</div>
<div class="hp-poi-content-section hp-poi-content-section__wrapper hp-surroundings-category hp-surroundings-category_num-1" bis_skin_checked="1" style="margin-top: -15px;">
<h3 class="hp-poi-list__heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Lähimmät lentokentät *
</font></font></h3>
<ul class="bui-list bui-list--text add hp-poi-list__wrapper" style="margin-top: -15px;">
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsinki-Vantaan lentokenttä - 16.6 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Lennart Meri Tallinnan lentokenttä - 84.2 km
</font></font></div>

</div>
</li>
</ul>
</div>
<div class="
hp-poi-content-section
popular-landmarks
hp-poi-content-section__wrapper" bis_skin_checked="1">
<h3 class="hp-poi-list__heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Suosituimmat maamerkit *
</font></font></h3>
<ul class="bui-list bui-list--text hp-poi-list__wrapper" >
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsingin katedraali - 0.4 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsingin linja-autoasema - 0.6 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Kampin ostoskeskus - 0.7 km
</font></font></div>
 
</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsingin Musiikkitalo - 0.7 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Finlandia-talo - 0.9 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Helsingin olympiastadion - 2.1 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Telia 5G Areena  - 2.4 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Suomenlinnan merilinnoitus - 3.4 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Hartwall-areena - 4.1 km
</font></font></div>

</div>
</li>
<li class="bui-list__item">
<div class="hp-poi-list__body" bis_skin_checked="1">
<div class="hp-poi-list__description" bis_skin_checked="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Iso Omenan ostoskeskus - 11.5 km
</font></font></div>

</div>
</li>
</ul>
</div>
</div>

</div>
		</div>
			</div>
		</section>
<?php
		$stmtg=$db->query("SELECT * FROM kurumsalgaleri WHERE aktif = '".htmlspecialchars('1')."' and anasayfa='".htmlspecialchars(0)."' order by rand() limit 5");
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