 <?php 

		$st =new veriTabani();
		$st -> tabloadi="sayfatipi";
		
        $mnkw  =new veriTabani();
        $mnkw -> tabloadi="menu_kategori";
        
        $menuAdi  =new veriTabani();
        $menuAdi -> tabloadi="menuAdi";
        
        // Burada sıra sutunu dolu ise random sıralaması için sıra sutunu lazım 
         $siracek= $menuAdi->tekveri("sira",$_GET[formid]);	
       
        
       
        // Menu leri listeleme 
        $mnkCek = $mnkw->sorgu("select * from menu_kategori where menuid = $_GET[formid]");	
        
        		
 ?>
        <hr/>
        <!--body wrapper start-->
        <div class="wrapper">
            
        <div id="row">
            
            			    <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Nestable List 2
                              <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                       <div class="panel-body">
                       <form id="menus" formid="">
                              <div class="col-sm-6">
                           <label> Link Adı </label> 
                           <input type="text" class="form-control tooltips" name="linkadi" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Galeri İsmi" data-original-title="Galeri İsmi">
                            </div>
                          <div class="col-sm-6">   
                            <label> Link Açıklaması </label> 
                            <input type="text" class="form-control tooltips" name="linkaciklama" data-trigger="hover" data-toggle="tooltip" title="" placeholder="Galeri İsmi" data-original-title="Galeri İsmi"> 
                          </div>
                             <div class="col-sm-6 bosluk">
                       
                      <select name="sayfatipi" id="sayfalar"  class="col-md-2 form-control input-sm m-bot15">
                                 <option selected value="">Lütfen Seçiniz</option>
                               
                               <?php
                               			$stcek = $st->sorgu("select * from sayfatipi");
                               			foreach($stcek as $stvalue){
	                               			echo '  <option value="'.$stvalue['id'].'">'.$stvalue['adi'].' </option>';
                               			}		
                                ?>
                              
                               
                            </select>
                            
                        </div>
                        <div id="veri"></div>
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
                        <input  type="hidden" name="menuid" value="<?php echo $_GET['formid'] ?>">
                       <div class="col-sm-12 bosluk"> <a class="btn btn-warning btn-lg menubutton" type="button">Gönder</a></div>
                        
                        </div>
                  </form>
                    </section>
                </div> 
            
            </div>
            
            
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Nestable List 1
                             <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="dd" id="nestable_list_1">
                                      <ul class="list-unstyled menulerlist"> 
                                <?php 
                                        			
                                  				
                                    			$veri = array();
                                            foreach ($mnkCek as $mnkvalue) {
                                                # code...
                                                       $veri[]=$mnkvalue['id'] ;
                                            
                                    echo '              <li id="list_'.$mnkvalue['id'].'" class="breadcrumb ">'.$mnkvalue['linkadi'].'  <a href="#" id="'.$mnkvalue['id'].'" class="mDuzenle">Düzenle</a> | <a  id="'.$mnkvalue['id'].'" class="altMenuSil" href="#">sil</a></li>';
                                    
                                    
                                            }
                                   echo "<pre>";         
                                   print_r($veri);    
                                ?>
                               
                                    
                               
                                
                              
	                                
	                 
                                </ul>
                                
                            </div>
                        </div>
                    </section>

                </div>
            
            </div>
            
            
        </div>

 