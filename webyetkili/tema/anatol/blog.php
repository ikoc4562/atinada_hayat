<div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo" >
            <a href="index.php"><img src="tema/anatol/images/logoadminic.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.php"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->
	</br>
		</br>

              <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <div class="media-body">
                        <h4><a href="#">Järjestelmänvalvoja</a></h4>
                        <span>"Tervetuloa..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Valikko</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="index.php?cikis=yap"><i class="fa fa-sign-out"></i> <span>Ulos</span></a></li>
                </ul>
            </div>
            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">

               <?php

               		$adminsayfa = new adminSayfa();
               		$adminsayfa->adminKategoriMenu($db);
               ?>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>


  <div class="main-content" >

  <?php
        include("header.php");
	  
 
  ?>
	