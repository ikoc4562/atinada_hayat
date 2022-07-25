	<?php
	
	$sayfaprc = new veriTabani();
	$sayfaprc->tabloadi="sayfaparcacik";
	
	
	 ?>
        <!-- page heading end-->

        <!--body wrapper start-->
        <form id="sayfaparcaciklari">
<div class="wrapper">
           <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
           Sayfa Parcacıkları Tablo
           <span class="tools pull-right">
               <a href="javascript:;" class="fa fa-chevron-down"></a>
               <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
           <th width="30"> </th>
            <th>Başlık</th>
            <th width="80">Dil</th>
            
            <th width="200">Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     <?php
     
     $parcacik=$sayfaprc->sorgu("select * from sayfaparcacik");
     foreach($parcacik as $parcacikvalue){
	     
	     echo'<tr class="gradeA">
            <td>  
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox" >
                                </div>
                            </div>
</td>
            <td>'.$parcacikvalue['baslik'].'</td>
             <td>'.$parcacikvalue['dil'].'</td>
        
             
                  <td class="center hidden-phone"> 
                 <a href="index.php?page=siteyonetimi&git=parcacikform&formid='.$parcacikvalue['id'].'" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   
                 <a href="#" id="'.$parcacikvalue['id'].'" title="Sil" class="btn btn-default active parcaciksil">  <i class="fa fa-minus-circle"></i></a>
                  
                  </td>
        </tr>'
        ;
	     
	     
	     
     }

     
      ?>
                </tbody>
        <tfoot>
        <tr>
             <th> </th>
            <th>Başlık</th>
            <th>Dil</th>
            <th>Seçenekler</th>
        </tr>
        </tfoot>
        
        </table>
    
        </div>
    
        </div>
              
        </section>
        </div>
        </div>
        </div>
</form>