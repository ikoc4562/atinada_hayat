<?php


    $mailayarlari= new veriTabani ();
	      $mailayarlari->tabloadi="mailayarlari";

?>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
          <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">SMTP Mail Ayarları</h3>
                        </div>
                        <div class="panel-body">
                           <div class="col-sm-6">
                           <form id="mailayarlari">
                           <label>SMTP Sunucu</label> <input value="<?php echo $mailayarlari->sabitVeri($db,"sunucu");?>" name="sunucu" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                        <div class="col-sm-6">
                           <label>SMTP Port</label> <input value="<?php echo $mailayarlari->sabitVeri($db,"port");?>" name="port" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                         <div class="col-sm-6">
                           <label>SMTP Kullanıcı Adı</label> <input value="<?php echo $mailayarlari->sabitVeri($db,"kullaniciadi");?>" name="kullaniciadi" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                          <div class="col-sm-6">
                          <label>SMTP Şifre	</label> <input value="<?php echo $mailayarlari->sabitVeri($db,"sifre");?>" name="sifre" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                          <div  class="col-sm-12 bosluk"> <a id="<?php
                          echo $mailayarlari->sabitVeri("id");
                           ?>" class="btn btn-warning btn-lg mailayaributton" type="button">Ayarla</a></div>
                          </form>
                        </div>
                    </div>
   </div>

        <!--body wrapper end-->
