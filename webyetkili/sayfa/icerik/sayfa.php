<?php 
	$cicerik = new icerik();
	$sayfatipclass = new veriTabani();
	$sayfatipclass->tabloadi="sayfatipi";
	
	$sayfatipleri=$sayfatipclass->sorgu("select * from sayfatipi where  durum=1");

	if($_GET[tip]==""){
		
		$tipi = 0;
	}else{
		
		$tipi=$_GET['tip'];
	}	

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
             </span><br>
             
             <?php 
	             
	             foreach($sayfatipleri as $sssvalue){
		             echo ' <a href="index.php?page=sayfalar&id='.$_GET[id].'&tip='.$sssvalue[id].'" class="btn btn-warning btn-xs">'.$sssvalue[adi].' Tablosu </a> ';
	             }
             ?>
             
        </header>
        
        <div class="panel-body">
        <?php 
	        
	        
	        
	        	foreach($sayfatipleri as $savalue){
		        	echo '<a href="index.php?page=icerik&git=icerikForm&tid='.$savalue[id].'" class="btn btn-primary btn-lg">'.$savalue[adi].' Ekle </a> ';
	        	}
        ?>
     
        <div class="adv-table">
    
        <table  class="display table table-bordered table-striped" id="dynamic-table">
     
        <thead>
         
        <tr>
            <th>&nbsp;</th>
            <th>Code İd</th>
            <th>Başlık</th>
            <th>Dil</th>
            <th>Tarih</th>
            <th>Hit</th>
            <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     <?php  
     
     		$iceriksor= $cicerik->sorgu("select * from sayfa where tip=$tipi  order by id desc");
     		
     		foreach ($iceriksor as $icerkValue){
     			
				echo ' <tr class="gradeA">
            <td>  
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox" >
                                </div>
                            </div>
</td>
            <td>125231</td>
            <td>'.$icerkValue['baslik'].'</td>
            <td>'.$icerkValue[dil].'</td>
            <td>'.$icerkValue['tarih'].'</td>
              <td>'.$icerkValue[hit].'</td>
             
                  <td class="center hidden-phone"> 
                <a href="#" title="Göster" class="btn btn-default active"> <i class="fa fa-laptop"></i></a>
                 <a href="index.php?page=icerik&git=icerikForm&formid='.$icerkValue['id'].'" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   
                 <a id="'.$icerkValue['id'].'" href="#" title="Sil" class="btn btn-default active icerikSil">  <i class="fa fa-minus-circle "></i></a>
                  
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
            <th >Tarih</th>
            <th >Hit</th>
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