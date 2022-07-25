<?php
	$formg = new adminSayfa();
	$durum=  $formg->adminTekveri($db,"durum", $_GET['formid']);
	if ($durum==0) {
		$aktif="";
	}else{
		$aktif="checked";
	}


?>
        <!--body wrapper start-->
        <div class="wrapper">
        	<div class="col-sm-12">
             	<span class="pull-right">     <a class="or fa-user-md" href="#"></a></span>
       		</div>
       		<div class="clr"></div>
              <div id="sorgu"></div>

              <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Admin</h3>
                        </div>
                        <div class="panel-body">
                      <form id="adminForm" formid="<?php echo  $_GET['formid']; ?>">

                      <div class="col-sm-12">
                      <label>Başlık </label>
                            <input type="text" id="adi" name="adi" value="<?php  echo $formg->adminTekveri($db,"adi", $_GET['formid']) ?>"  class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Başlık" data-original-title="Başlık">
                        </div>
                        <div class="col-sm-12">
                      <label>Kategori </label>
                          <select id="ustid" name="ustid" class="form-control input-sm m-bot15">
                          		<option value="0">Üst Kategori</option>
                                <?php $adminclass->adminKategoriOption($db,$_GET['formid']); ?>
                            </select>
                        </div>

                           <div class="col-sm-12 ">
                      <label>İnclude Dosyası:</label>
                      <input type="text" id="include" value="<?php echo  $formg->adminTekveri($db,"include", $_GET['formid'])?>" class="form-control tooltips" name="include" data-trigger="hover" data-toggle="tooltip" title="" placeholder="include dosyası" data-original-title="İnclude.php">

                        </div>

                        <div class="col-sm-12 ">
                      <label>icon:</label>
                      <input type="text" id="icon" value="<?php echo $formg->adminTekveri($db,"icon", $_GET['formid'])?>" class="form-control tooltips" name="icon" data-trigger="hover" data-toggle="tooltip" title="" placeholder="icon css adı" data-original-title="css İcon kodu">

                        </div>
                       <div class="square-green single-row"><div class="checkbox ">
                       		<label>Aktif et </label>
                       		<input <?php echo $aktif; ?> name="durum" value="1" type="checkbox" >
                                </div>
                            </div>
                       <div class="col-sm-12 "><br>
                       <input type="hidden" name="codeID" value="<?php echo $randomsayi;?>">
<button id="adminbutton" class="btn btn-primary btn-lg" data-toggle="button">Admin Sayfası Ekle </button>
                        </div>
                       </form>
                        </div>
                    </div>

        </div>
        <!--body wrapper end-->
