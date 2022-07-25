        <?php


          $dosyaform= new veriTabani ();
	      $dosyaform->tabloadi="dosya";
	        $dosyakat= new veriTabani ();
	      $dosyakat->tabloadi="dosya_kategori";

	      $genelAyar= new veriTabani ();
	      $genelAyar->tabloadi="genelayarlar";
       ?>

  <div class="wrapper">

          <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Genel Ayarlar</h3>
                        </div>
                        <div class="panel-body">

                        <div class="col-sm-12">
		                        <a href="#" class="thumbnail">
											<img src="<?php echo $dosyaform->tekveri("url",$_GET['formid']);?>" alt="...">
								</a>

						</div>

						<div class="col-sm-12">

								<ul>
									<li><span>Dosya İsmi : </span> <b><?php echo $dosyaform->tekveri("baslik",$_GET['formid']);?></b></li>
									<li><span>Dosya Türü : </span> <b><?php echo $dosyaform->tekveri("tur",$_GET['formid']);?></b></li>
									<li><span>Yükleme  tarihi : </span> <b><?php echo $dosyaform->tekveri("tarih",$_GET['formid']);?></b></li>

								</ul>

						</div>

                        <form id="dosyaForm" formid="<?php $_GET['formid']; ?>">
                      		<div class="col-sm-12">
                      		  	<select name="kid" class="form-control m-bot15">

	                                 <?php 
		                                 $kid = $dosyaform->tekveri("kid",$_GET['formid']);
		                                 $dosyakat-> kategoriOption($kid);
	                                 ?>
                                </select>



                           <label>Dosya Başlık</label> <input value="<?php echo $dosyaform->tekveri("baslik",$_GET['formid']);?>" name="baslik" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Dosya Başlık" data-original-title="Dosya Başlığı">


                           <label>Alternatif Metin</label> <input value="<?php echo $dosyaform->tekveri("altarnatifMetin",$_GET['formid']);?>" name="altarnatifMetin" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Tooltip goes here">


                           <label>Alt Yazı</label> <input value="<?php echo $dosyaform->tekveri("altYazi",$_GET['formid']);?>" name="altYazi" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Alt Yazı" data-original-title="Alternatif Metin ">


                        <label>Tanıtım</label>
                            <textarea rows="3" name="aciklama" class="form-control"><?php echo $dosyaform->tekveri("aciklama",$_GET['formid']);?></textarea>


                           <label>Foto Url  </label> <input value="<?php echo $genelAyar->sabitveri("siteadresi").$dosyaform->tekveri("url",$_GET['formid']);?>"  type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Hover me" data-original-title="Fotoğraf linki">

                           <span> * Ayarlar / Genel Ayarlar bölümünden sitenizin tam adını giriniz </span>


                        </div>
                          <div class="col-sm-12 bosluk"> <a id="<?php
                          echo $dosyaform->sabitVeri("id");
                           ?>" class="btn btn-warning btn-lg dosyaFormButton" type="button">Ayarla</a></div>
                          </form>
                        </div>
                    </div>
   </div>

        <!--body wrapper end-->
