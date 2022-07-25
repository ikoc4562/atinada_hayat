<?php 

$dilclass = new veriTabani();
$dilclass->tabloadi="dil";


$mc = new veriTabani();
$mc->tabloadi="menuAdi";

$ma =new veriTabani();
$ma->tabloadi="optionMenu";
echo $dil=	$mc->tekveri("dil", $_GET['formid']);
?>

<form id="menuEkle" formid="<?php echo $_GET['formid']; ?>" >        <div class="wrapper">
 <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
             <div class="clr"> </div>
         <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Yeni Menu Ekle</h3>
                        </div>
                        <div class="panel-body">
                          <div class="col-sm-6"><label>Menü Adı </label>
                           <input type="text" name="adi" value="<?php  echo $mc->tekveri("adi", $_GET['formid']); ?>" id="adi" class="form-control"></div>
                             <div class="col-sm-12 bosluk">
                     <label>Menü Açıklaması</label>  <textarea name="aciklama" rows="3" class="form-control"><?php  echo $mc->tekveri("aciklama", $_GET['formid']); ?></textarea>
                        </div>
                        <div class="col-sm-6">
                     <label>Dil</label>    <select name="dil" class="form-control input-sm m-bot15">
                                 <?php 
                               	$veriler = $dilclass->sorgu("select * from dil  ");
                               		
                               		
                               		
                               		foreach ($veriler as $vvlue){
											if($dil==$vvlue['dil']){
												$selected = "selected";	
	
											}else {
												$selected=false;	
												}
												
												
											echo '<option '.$selected.' value="'.$vvlue['dil'].'">'.$vvlue['dil'].' </option>';					
				
									}
                               
                               ?>
                                
                               
                               
                            </select>
                        </div>
                           <div class="col-sm-6">
                     <label>Menu Stili</label>    <select name="menuTipi" class="form-control input-sm m-bot15">
                             		
                             	<?php $menucek= $ma->sorgu(' SELECT * FROM optionMenu WHERE codeID = 12332	 '); 
                             			
                             			foreach ($menucek as $mmvalue){
                             				
												echo '<option value="'.$mmvalue['id'].'">'.$mmvalue['adi'].' </option>';
                             			}
                             	?>	
                              			
                                
                              
                               
                            </select>
                        </div>
                        <input type="hidden" name="codeID" value="<?php echo $randomsayi; ?>">
                           <div class="col-sm-12 bosluk"> <a class="btn btn-warning btn-lg sitemenuekle" type="button">Gönder</a></div>
                        </div>
                    </div>
        </div>
        </form>