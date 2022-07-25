<?php 
	$vt = new veriTabani();
	$vt->tabloadi="menuAdi"	;
	
	
	

?>

<!--body wrapper start-->
       <form id="sayfalar">
 <div class="wrapper">
 <div class="col-sm-12">
             	<span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> 
       		</div>
           <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Sayfalar Tablo
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        
        <div class="panel-body">
     <a href="index.php?page=siteyonetimi&git=menuForm" class="btn btn-primary btn-lg">Menu Ekle </a>
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>Code İd</th>
            <th>Adı</th>
            <th>Dil</th>
            <th>Açıklama</th>
         
            <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     <?php  
     
     		$iceriksor= $vt->sorgu("select * from menuAdi  order by id desc");
     		
     		foreach ($iceriksor as $icerkValue){
     			
				echo ' <tr class="gradeA">
            <td>  
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox"  name="sil[]"  >
                                </div>
                            </div>
</td>
            <td>'.$icerkValue['codeID'].'</td>
            <td>'.$icerkValue['adi'].'</td>
            <td>'.$icerkValue[dil].'</td>
            <td>'.$icerkValue['aciklama'].'</td>
           
             
                  <td class="center hidden-phone"> 
                <a href="index.php?page=siteyonetimi&git=menuOlustur&formid='.$icerkValue['id'].'" title="Göster" class="btn btn-default active"> <i class="fa fa-laptop"></i></a>
                 <a href="index.php?page=siteyonetimi&git=menuForm&formid='.$icerkValue['id'].'" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   
                 <a id="'.$icerkValue['id'].'" href="#" title="Sil" class="btn btn-default active sitemenuSil">  <i class="fa fa-minus-circle "></i></a>
                  
                  </td>
        </tr>';		
	
     		}

     ?>
       
        </tbody>
        <tfoot>
        <tr>
            <th>&nbsp;</th>
            <th>Code İd</th>
            <th>Başlık</th>
            <th>Dil</th>
            <th >Açıklama</th>
   
            <th >Seçenekler</th>
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