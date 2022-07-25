<?php

$googleayarlari= new veriTabani ();
	      $googleayarlari->tabloadi="googleayarlari";


 ?>
        <!-- page heading end-->

        <!--body wrapper start-->
<form id="googleayarlari">
        <div class="wrapper">
          <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Google Ayarları</h3>
                        </div>
                        <div class="panel-body">
                        <form id="googleayarlari">
                           <div class="col-sm-6">
                           <label>Analitics Kodu</label>
                           <textarea name="analitics" rows="6" class="form-control"><?php echo $googleayarlari->sabitVeri($db,"analitics");?></textarea>
                        </div>
                          <div class="col-sm-6">
                           <label>Google Site Doğrulama Kodu</label>
                           <textarea name="dogrulama" rows="6" class="form-control"><?php echo $googleayarlari->sabitVeri($db,"dogrulama");?></textarea>
                        </div>
                          <div class="col-sm-6">
                           <label>Remarketing Kodu</label>
                           <textarea name="remarketing" rows="6" class="form-control"><?php echo $googleayarlari->sabitVeri($db,"remarketing");?></textarea>
                        </div>
                          <div class="col-sm-12 bosluk"> <a id="<?php echo $googleayarlari->sabitVeri($db,"id");?>" class="btn btn-warning btn-lg googleayaributton" type="button">Ayarla</a></div>
                        </div>
                        </form>
                    </div>
   </div>

        <!--body wrapper end-->
