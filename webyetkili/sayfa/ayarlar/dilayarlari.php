<?php
      $dilclass = new veriTabani ();
      $dilclass->tabloadi="dil";
	  $dilayarlari= new veriTabani ();
	  $dilayarlari->tabloadi="genelayarlar";





 ?>
      <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
          <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dil Ayarları</h3>
                        </div>
                        <div class="panel-body">
                        <form id="dilayarlari">
                         <div id="col-sm-6">
                         <label>Çoklu Dil Desteğini Aç</label>
                         <select name="dilaktif" class="form-control m-bot15">
                                <option value="1">EVET</option>
                                <option value="0">HAYIR</option>
                                 </select> </div>

                             <div id="col-sm-6">
                         <label>Varsayılan Dil</label>
                         <select name="dil" class="form-control m-bot15">
                               <?php
                                $secilidil=$dilayarlari->tekveri($db,'dil',$_GET['formid']);
                                $dilcek = $dilclass->sorgu($db,"select * from dil");
                                 foreach($dilcek as $dilvalue){

	                                 if($secilidil==$dilvalue['dil']){

		                                 $secili="selected";
	                                 }
	                                 else{
		                                $secili=false;
	                                 }
	                                 echo'<option value="'.$dilvalue['dil'].'" '.$secili.'>'.$dilvalue['dil'].' </option>';   } ?>
                            </select> </div>
                          <div class="col-sm-12 bosluk"> <a id="<?php echo $dilayarlari->sabitVeri("id");?>" class="btn btn-warning btn-lg dilayaributton" type="button">Ayarla</a></div>
                        </div>
                        </form>
                    </div>
   </div>

        <!--body wrapper end-->
