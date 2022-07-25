 <?php 
 
 	$dosyakat = new veriTabani();
 	$dosyakat -> tabloadi="dosya_kategori";
 	
 		
 
  ?>
 
 <!--body wrapper start-->
        <div class="wrapper">
        
               <div class="panel-body">
                    <form action="sayfa/upload.php" class="dropzone" id="my-awesome-dropzone">
	                    
	                    <div class="panel-body">
	                    <label>Kategorisini Seçiniz</label>
                                <select name="kid" class="form-control m-bot15">
                             
                                <?php  $dosyakat ->kategoriOption();    ?>                            
                               
                           
                            </select>

                                </div>
	                    
                    </form>
                </div> 



				<form action="sayfa/upload.php" enctype="multipart/form-data" method="post">
					
							<input type="file" name="file"> <input type="submit">
					
				</form>

         </div>
        <!--body wrapper end-->
        