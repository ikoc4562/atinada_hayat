<?php

$dilclass = new veriTabani ();
$dilclass->tabloadi="dil";
$sliderclass= new veriTabani ();
$sliderclass->tabloadi="slider"


 ?>
        <!-- page heading end-->

       <!--body wrapper start-->
        <div class="wrapper">
         <div class="col-sm-12">
         <div id="sorgu"></div> 
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
         <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Slider Ekle</h3>
                        </div>
                        <div class="panel-body">
                           
 <form id="sliderForm" formid="<?php echo $_GET['formid']; ?>">
                           <div class="col-sm-6">
                           
                          <label> Slider Adı</label> <input value="<?php echo $sliderclass->tekveri('adi',$_GET['formid']) ?>" name="adi" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Adı" data-original-title="Slider Adı Giriniz">
                            </div>
                            <div class="col-sm-6">
                           <label> Slider Açıklaması</label> <textarea  name="aciklama" rows="6" class="form-control"><?php echo $sliderclass->tekveri('aciklama',$_GET['formid']) ?></textarea>
                        </div>
                         
                 
                         <div class="col-sm-12">
                         <label>Dil:</label>   <select name="dil" class="form-control input-sm m-bot15">
                                <?php
                                $secilidil=$sliderclass->tekveri('dil',$_GET['formid']);
                                $dilcek = $dilclass->sorgu("select * from dil");
                                 foreach($dilcek as $dilvalue){
	                                 
	                                 if($secilidil==$dilvalue['dil']){
		                                 
		                                 $secili="selected";
	                                 }
	                                 else{
		                                $secili=false;
	                                 }
	                                 echo'<option value="'.$dilvalue['dil'].'" '.$secili.'>'.$dilvalue['dil'].' </option>';   }
                                
                                 ?>
                                                           
                            </select>
                        </div>
                        <div class="col-sm-12">
                         <p class="muted"> %sliderImage% => Kolon Resim Url</p>
                          <p class="muted"> %sliderDesc% => Kolon Açıklama </p>
                           <p class="muted"> %sliderLinkUrl% => Kolon Link Url </p>
                        </div>
                          <div class="col-sm-12">
                           <label> Slider Yapısı</label> <textarea name="slideryapisi" rows="6" class="form-control"><?php echo $sliderclass->tekveri('slideryapisi',$_GET['formid']) ?></textarea>
                        </div>
                         <div class="col-sm-12">
                         <p class="muted"> sliderLink => forumda resimlere link eklem için yer açar, 
</p>
                          <p class="muted"> sliderDesc => slide ekleme formunda resimler açıklama ekleme için yer açar
 </p>
                           <p class="muted">Aralarda virgul kullanarak yazınız Örnek : sliderLink,sliderDesc
 </p>
                        </div>
                         <div class="col-sm-12">
                           <label> Slider Seçenekleri</label> <textarea name="slidersecenek" rows="6" class="form-control"><?php echo $sliderclass->tekveri('slidersecenek',$_GET['formid']) ?></textarea>
                        </div>
                            <div class="form-group col-sm-12 bosluk">  <a class="btn btn-warning btn-lg sliderbutton" type="button">Gönder</a></div>
                        
                        </div>
                        </form>
                    </div>

        </div>

        <!--body wrapper end-->
        