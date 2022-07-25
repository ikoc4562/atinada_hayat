<?php

$dilclass = new veriTabani();
$dilclass->tabloadi='dil';
$parcacikclass = new veriTabani();
$parcacikclass->tabloadi='sayfaparcacik';

 ?>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
<div class="col-lg-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
            <div class="panel panel-default">
            <form id="parcacikForm" formid="<?php echo $_GET['formid']; ?>">
                        <div class="panel-heading">
                            <h3 class="panel-title">Anasayfa_sekme</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">
                         <label>Dil:</label>   <select name="dil" class="form-control input-sm m-bot15">
                                <?php
                                $secilidil=$parcacikclass->tekveri('dil',$_GET['formid']);
                                $dilcek = $dilclass->sorgu("select * from dil");
                                 foreach($dilcek as $dilvalue){
	                                 
	                                 if($secilidil==$dilvalue['dil']){
		                                 
		                                 $secili="selected";
	                                 }
	                                 else{
		                                 
		                                $secili=false;
	                                 }
	                                 echo'<option value="'.$dilvalue['dil'].'" '.$secili.'>'.$dilvalue['dil'].' </option>';
	                                 
                                 }
                                
                                 ?>

                                
                          
                            
                            </select>
                        </div>
                        
                          <div class="col-sm-12">
                          <label>Parcaçık Başlık</label> <input name="baslik" value="<?php echo $parcacikclass->tekveri('baslik',$_GET['formid'] )?>" type="text" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Parçacık" data-original-title="Parcaçık Adı Giriniz">
                            </div>
                            
                              
                                        <div class="col-sm-12 bosluk">
                                            <textarea class="form-control ckeditor" name="icerik" rows="6"><?php echo $parcacikclass->tekveri('icerik',$_GET['formid'] )?></textarea>
                                        </div>
                               
                                                <div  class="form-group col-sm-12 bosluk">  <a class="btn btn-warning btn-lg parcacikbutton" type="button">Gönder</a></div>
                          
                    </div>
                    </form>
                        </div>
                    </div>

        </div>
        <!--body wrapper end-->
        