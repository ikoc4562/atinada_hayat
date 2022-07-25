<?php

		$st =new veriTabani();
		$st -> tabloadi="dosya";

        $mnk  =new veriTabani();
        $mnk -> tabloadi="menu_kategori";

        $menuAdi  =new veriTabani();
        $menuAdi -> tabloadi="dosya_kategori";

        // Burada sıra sutunu dolu ise random sıralaması için sıra sutunu lazım
        // $siracek= $menuAdi->tekveri("sira",$_GET[formid]);



        // Menu leri listeleme
        $mnkCek = $mnk->sorgu($db,"select * from dosya_kategori");	


 ?>
        <hr/>
        <!--body wrapper start-->
        <div class="wrapper">

        <div id="row">

            			    <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                          YENİ KATEGORİ OLUŞTUR
                              <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                       <div class="panel-body">
                       <form id="dosyaKategori" formid="">
                              <div class="col-sm-12">
                           <label> Adı </label>
                           <input type="text" class="form-control tooltips" name="adi" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Kategori Adı " data-original-title="Dosya kategori İsmi">
                            </div>

                             <div class="col-sm-6 bosluk">
                        <label> Üst kategori </label>
                      <select name="ustid" id="ustid"  class="col-md-2 form-control input-sm m-bot15">
                                 <option selected value="">Lütfen Seçiniz</option>

                               <?php

                               	$menuAdi ->kategoriOption();


                                ?>


                            </select>

                        </div>
                        <div class="col-sm-12">
                           <label> Açıklama </label>
                           <textarea  class="form-control tooltips" name="aciklama" data-trigger="hover" > </textarea>
                            </div>
                        <!-- <div class="col-sm-12">
                            <input type="text" name="haricilink" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Harici Link" data-original-title="Harici Link">
                             </div>




                          <div class="col-sm-6 bosluk">
                         <label>Açılma Şekli: </label>
                      <select class="col-md-2 form-control input-sm m-bot15">
                                <option>_blank</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                        </div>
                         <div class="col-sm-6 bosluk">
                         <label>Alt Link: </label>
                      <select class="col-md-2 form-control input-sm m-bot15">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                        </div>-->

                       <div class="col-sm-12 bosluk"> <a class="btn btn-warning btn-lg dosyaKategoriButton" type="button">Gönder</a></div>

                        </div>
                  </form>
                    </section>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            KATEGORİLER
                             <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="dd" id="nestable_list_1">
                               <ul class="list-unstyled dosyaKategoriList">
                                <?php


                                            $menuAdi->menuListe();

                                ?>
                                </ul>
                            </div>
                        </div>
                    </section>

                </div>

            </div>


        </div>
