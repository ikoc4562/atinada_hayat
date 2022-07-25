      <?php


          $genelayarlar= new veriTabani ();
	      $genelayarlar->tabloadi="genelayarlar";

       ?>

        <!-- page heading end-->

        <!--body wrapper start-->

        <div class="wrapper">
          <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Genel Ayarlar</h3>
                        </div>
                        <div class="panel-body">
                        <form id="genelayarlar">
                           <div class="col-sm-6">
                           <?php



                            ?>
                           <label>Site Adresi</label> <input value="<?php echo $genelayarlar->sabitVeri($db,"siteadresi");?>" name="siteadresi" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                        <div class="col-sm-6">
                           <label>Site Adı</label> <input value="<?php echo $genelayarlar->sabitVeri($db,"adi");?>" name="adi" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                         <div class="col-sm-6">
                           <label>Site Başlık</label> <input value="<?php echo $genelayarlar->sabitVeri($db,"baslik");?>" name="baslik" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                        <div class="col-sm-6">
                        <label>Site Açıklama </label>
                            <textarea rows="3" name="aciklama" class="form-control"><?php echo $genelayarlar->sabitVeri($db,"aciklama");?></textarea>
                        </div>
                          <div class="col-sm-6">
                        <label>Site keyWord </label>
                            <textarea rows="3" name="keyWord" class="form-control"><?php echo $genelayarlar->sabitVeri($db,"keyWord");?></textarea>
                        </div>
                        <div class="col-sm-6">
                           <label>Copyright </label> <input value="<?php echo $genelayarlar->sabitVeri($db,"copyright");?>" name="copyright" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                        <div class="col-sm-6">
                          <label>Yönetici Email :</label> <input value="<?php echo $genelayarlar->sabitVeri($db,"email");?>" name="email" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                        <div class="col-sm-6">
                          <label>Gönderen</label> <input value="<?php echo $genelayarlar->sabitVeri($db,"gonderen");?>" name="gonderen" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                          <div class="col-sm-6">
                          <label>Mail Turn Back</label> <input value="<?php echo $genelayarlar->sabitVeri($db,"mailturnback");?>" name="mailturnback" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">
                        </div>
                          <div class="col-sm-12 bosluk"> <a id="<?php
                          echo $genelayarlar->sabitVeri($db,"id");
                           ?>" class="btn btn-warning btn-lg genelayarlarbutton" type="button">Ayarla</a></div>
                          </form>
                        </div>
                    </div>
   </div>

        <!--body wrapper end-->
