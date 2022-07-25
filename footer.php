     <?php
                      // about us bölümü  çekim işlemi - fatihmerickoc.com
	  
	  		$stmt=$db->query("SELECT * FROM kurumsal WHERE aktif = '".htmlspecialchars('1')."' and id='".htmlspecialchars('10')."' limit 1");

			$stmt->execute();

			$result=$stmt->fetchAll();
?>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <img src="images/logobeyaz.png">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
				<?php
				  if($result[0]["twitter"]<>""){
				  ?>
                <li class="ftco-animate"><a href="<?=$result[0]["twitter"]?>"><span class="icon-twitter"></span></a></li>
				 <?php
					  }
				  if($result[0]["facebook"]<>""){
				  ?> 
                <li class="ftco-animate"><a href="<?=$result[0]["facebook"]?>"><span class="icon-facebook"></span></a></li>
				 <?php
					  }
				  if($result[0]["instagram"]<>""){
				  ?> 
                <li class="ftco-animate"><a href="<?=$result[0]["instagram"]?>"><span class="icon-instagram"></span></a></li>
				  <?php
					  }
					  
					  ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Linkkejä</h2>
              <ul class="list-unstyled">
                <li><a href="huoneita" class="py-2 d-block">Huoneita</a></li>
                <li><a href="etusivu#palvelu" class="py-2 d-block">Palvelut</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Yksityisyys</h2>
              <ul class="list-unstyled">
                <li><a href="omatiedot" class="py-2 d-block">Tietoa</a></li>
                <li><a href="yhteytta" class="py-2 d-block">Ota yhteyttä</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Kysymyksiä?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?=$result[0]["address"]?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?=$result[0]["phone"]?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">&nbsp;&nbsp;<?=$result[0]["email"]?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by <a href="https://www.suomiconnect.fi/" target="_blank">SuomiConnect Oy</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- <script src="js/bootstrap-datepicker.js"></script> -->
     <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

     <script src="external/jquery-ui.js"></script>
     <script>
         $('input[id$=tbDate]').datepicker({
             dateFormat: 'dd-mm-yy',

         });
     </script>
     <script>
         $('input[id$=tb2Date]').datepicker({
             dateFormat: 'dd-mm-yy'

         });
     </script>
  </body>
</html>