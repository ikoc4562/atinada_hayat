 <?php

 	$dosyakat = new veriTabani();
 	$dosyakat -> tabloadi="dosya_kategori";

 	$dosyaclass = new dosyaYonetimi();



  ?>

 <div class="wrapper dosyaPopup">
           <div class="row">
        <div class="">
        <section class="panel">
        <header class="panel-heading">
            Dosya KONTROL PANEL
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="#" class="fa fa-times"></a>
             </span>
        </header>

        <div class="panel-body">

            		 <div class="btn-group">


                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button" id="btnGroupDrop1">
                                            Kategoriler
                                            <span class="caret"></span>
                                        </button>
                                        <ul aria-labelledby="btnGroupDrop1" role="menu" class="dropdown-menu">


                                            <?php //echo $dosyaclass->menuListe($db); ?>
                                        </ul>
                                    </div>
                                     <div class="btn btn-success" ><a class="dosyayuklebutton" href="#" style="color:#fff;">DOSYA YÜKLE</a></div>

                       <div id="" class="fotoBoyut">

	                          <form id="dosyaBoyut">
	                          <div class="col-sm-12">
	                          <div class="col-sm-4">
                          <input type="text" id="genislik" name="genislik" value="" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Genişlik" data-original-title="Genişlik Giriniz">
                        </div>
                        <div class="col-sm-4">
                          <input type="text" id="yukseklik" name="yukseklik" value="" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Yükseklik Giriniz" data-original-title="Yükseklik Giriniz ">
                        </div>

                        <div class="col-sm-4">

	              		<input type="hidden" name="dosyaid" id="dosyaid" value="">
                  <button id="icerikSayfaButton" class="btn btn-warning btn-lg dosyaBoyutButton" data-toggle="button">Ekle </button>
                        </div>
	                          </div>

	                          </form>
	                        <div id="resimSonuc"></div>
	                   </div>

                   <div id="pencere"  >

                    <div id="dosyaSonuc"></div>


                     <div class="panel-body dosyayukle" >
						 	<form action="sayfa/upload.php" class="dropzone" id="my-awesome-dropzone">

			                    <div class="panel-body">
			                    <label>Kategorisini Seçiniz</label>
		                                <select name="kid" class="form-control m-bot15">

		                                <?php  $dosyakat->kategoriOption($db);    ?>


										</select>

		                       </div>

							   </form>
					</div>

                   </div>



                                </div>
        </div>

        </section>
        </div>
        </div>
</div>
