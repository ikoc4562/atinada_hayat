<?php

$sosyalayarlar= new veriTabani ();
	      $sosyalayarlar->tabloadi="sosyalayarlar";

 ?>        <!-- page heading end-->

        <!--body wrapper start-->

        <div class="wrapper">

        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sosyal Medya Ayarlar</h3>
                        </div>
                        <div class="panel-body">
                        <form id="sosyalmedya">
                           <div class="col-sm-6">
                           <label>Facebook Link</label>
                           <textarea name="fblink" rows="3" class="form-control">

	                           <?php echo $sosyalayarlar->sabitVeri($db,"fblink");?>

                           </textarea>
                        </div>
                          <div class="col-sm-6">
                           <label>Twitter Link</label>
                           <textarea name="twtlink" rows="3" class="form-control">

	                             <?php echo $sosyalayarlar->sabitVeri($db,"twtlink");?>
                           </textarea>
                        </div>
                          <div class="col-sm-6">
                           <label>İnstagram Link</label>
                           <textarea name="instalink" rows="3" class="form-control">
	                             <?php echo $sosyalayarlar->sabitVeri($db,"instalink");?>

                           </textarea>
                        </div>
                            <div class="col-sm-6">
                           <label>G+ Link</label>
                           <textarea name="pluslink" rows="3" class="form-control">
	                             <?php echo $sosyalayarlar->sabitVeri($db,"pluslink");?>

                           </textarea>
                        </div>
                          <div class="col-sm-6">
                           <label>Youtube Link</label>
                           <textarea name="ytblink" rows="3" class="form-control">
	                             <?php echo $sosyalayarlar->sabitVeri($db,"ytblink");?>

                           </textarea>
                        </div>
                          <div class="col-sm-6">
                           <label>Flickr Link</label>
                           <textarea name="flickrlink" rows="3" class="form-control">
	                             <?php echo $sosyalayarlar->sabitVeri($db,"flickrlink");?>
                           </textarea>
                        </div>
                                                  <div class="col-sm-6">
                           <label>Pinterest Link</label>
                           <textarea name="pinlink" rows="3" class="form-control">
	                           	                             <?php echo $sosyalayarlar->sabitVeri($db,"pinlink");?>
                           </textarea>
                        </div>

                          <div  class="col-sm-12 bosluk"> <a id="<?php echo $sosyalayarlar->sabitVeri($db,"id");?>" class="btn btn-warning btn-lg sosyalbutton" type="button"> Ayarla </a></div>
                          </form>
                        </div>
                    </div>
   </div>

        <!--body wrapper end-->
