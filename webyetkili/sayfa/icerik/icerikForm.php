  <?php 
  		$dili = new veriTabani();
  		$dili->tabloadi="dil";
  		


  		$mn = new veriTabani();
  		$mn->tabloadi="menuAdi";
  		
  		$ic = new veriTabani();
  		$ic->tabloadi="sayfa";
  		
  		$st = new veriTabani();
  		$st->tabloadi="sayfatipi";
  		
  		$dosyaclass = new veriTabani();
  		$dosyaclass ->tabloadi="dosya";
  		
  		 $secili = $ic->tekveri("dil", $_GET['formid']);
  		 $iliskilimenu = $ic->tekveri("menuID", $_GET['formid']);
  		
  		
  		$iliskiliResimid = $ic -> tekveri("iliskiliresim",$_GET['formid']);
  		
  		$resimurl = $dosyaclass->tekveri("url",$iliskiliResimid);
  		
  		if(empty($_GET['formid'])){
	  		
	  		$action = "sayfa/post.php?formadi=icerikForm";
	  		
	  		$tid= $_GET['tid'];
  		}
  		else{
	  		
	  		$action = "sayfa/post.php?formadi=icerikSayfaGuncelle&id=".$_GET['formid'];
	  		  $tid = $ic->tekveri("tip",$_GET['formid']);
  		}
  		
  		
  ?>
  <div class="wrapper">
          <!--Acordion Menu Başlangıcı-->
            <div class="col-md-12">
                    <!--collapse start--><h1><?php echo $st->tekveri("adi",$tid)?> Ekle</h1>
                    <div class="panel-group " id="accordion2">
                        <form id="sayfaOlustur" method="post" action="<?=$action; ?>" formid="<?php echo $_GET['formid']; ?>"> <div class="panel">
                            <div class="panel-heading dark hako">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle cartel" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                                        Dil Seçenekleri
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne2" class="panel-collapse collapse in">
                                <div class="panel-body">
                                <select name="dil" class="form-control m-bot15">
                             
                                <?php    $dilcek = $dili->sorgu("select * from dil ");
                                		
                                		foreach ($dilcek as $dvalue){
                                		
													if($secili == $dvalue['dil']){
														
														$selected= "selected";	
													}else{
														$selected=false;
													}
		
												echo ' <option '.$selected.' value="'.$dvalue['dil'].'">'.$dvalue['dil'].'</option>';

                                		}
                                ?>
                                
                               
                           
                            </select>

                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading dark hako">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle cartel" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">İçerik</a>
                                </h4>
                            </div>
                            <div id="collapseTwo2" class="panel-collapse collapse">
                                <div class="panel-body">
                                     <div class="col-sm-12">
                           <label>Başlık Girin</label><input type="text" id="baslik" name="baslik" value="<?php echo $ic->tekveri("baslik", $_GET['formid']);?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="başlık" placeholder="Başlık Giriniz" data-original-title="Tooltip goes here">
                        </div>
                           <div class="col-sm-12">
                           <label>Sayfa Url:</label>
        <!--Sayfa Url-->    <span> Link=http://<?php echo $_SERVER["SERVER_NAME"];?>/<b id="seo"></b>.html</span>
        
                        </div>
                      <div class="form-group col-sm-12">     <a class="btn btn-primary dosyaPopupClick" href="#"><i class="fa fa-cloud-upload"></i> Dosya Ekle</a></div>
                           <div class="form-group">
                                        <div class="col-sm-12">
                                       
                                          
                                           <textarea name="icerik" class="ckeditor" >  <?php echo $ic->tekveri("icerik", $_GET['formid']);?></textarea>
                                           
                                         
                                        </div>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading dark hako">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle cartel" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2"> İlişkili Menu-Sayfanın Sol Yanında Bulunan Menu</a>
                                </h4>
                            </div>
                            <div id="collapseThree2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                <select name="menuID" class="form-control m-bot15">
                                <option value="0">Seçiniz</option>
                                <?php $menuCek=$mn->sorgu("select * from menuAdi");
										foreach ($menuCek as $mnvalue){
												if($iliskilimenu==$mnvalue['id']){
													$selecteds="selected";
												}else {
													$selecteds=false;
												}
											echo '    <option '.$selecteds.' value="'.$mnvalue['id'].'">'.$mnvalue['adi'].'</option>';	
		
										}
                                ?>
                            
                            </select>

                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading dark hako">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle cartel" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2"> İlişkili Resimler</a>
                                </h4>
                            </div>
                            <div id="collapseFour2" class="panel-collapse collapse">
                                <div class="panel-body">
                                 <div class="form-group col-sm-12 iliskiListele">
                                 <a class="or fa-cloud-upload dosyaPopupClick" href="#"></a></div>
                                 <?php 
	                                 
	                                 

	                                 
	                                 if(empty($iliskilimenu)){
		                                 
		                                 
	                                 }else{
		                                 
		                                 echo '<img class="eklenenFotolar" src="'.$resimurl.' " width="100"/>';
	                                 }
	                                 
                                 ?>
                                 
                                 
                                 
                                 
                                </div>
                            </div>
                        </div>
                     <br>
                     
                     <input type="hidden" name="iliskiliresim" class="iliskiliresim" value="<?php echo $ic->tekveri("iliskiliresim", $_GET['formid']);?>">
                     <input type="hidden" id="seobaslik" name="seobaslik" value="<?php echo $ic->tekveri("seobaslik", $_GET['formid']);?>">
                      <input type="hidden" id="tip" name="tip" value="<?php echo $tid; ?>">
                      <input type="hidden" id="codeID" name="codeID" value="<?php echo $randomsayi; ?>">
                      
                      	<input type="submit" value="Ekle" class="btn btn-warning btn-lg" >
                      <!-- <button id="icerikSayfaButton" class="btn btn-warning btn-lg" data-toggle="button">Sayfa Ekle </button> -->
                          </form>
                    </div>
                  
                    <!--collapse end-->
                </div>
                 <!--Acordion Menu Bitiş-->
        </div>
        <!--body wrapper end-->
 