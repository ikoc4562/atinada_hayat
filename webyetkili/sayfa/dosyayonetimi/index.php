   
   <?php
   
   $dosya = new veriTabani();
   $dosya-> tabloadi="dosya";
   
   
    ?>
           <!-- page heading end-->

        <!--body wrapper start-->
      
 <div class="wrapper">
           <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Dosyalar  Tablo
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        
        <div class="panel-body">
     <a href="http://anatolmedia.net/admintema/index.php?page=sayfalar&id=46" class="btn btn-primary btn-lg">Yeni Ekle </a>
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>Resim</th>
            <th>Dosya</th>
           
            <th>Türü</th>
            <th>Tarih</th>
            <th>Seçenekler</th>
          
        </tr>
        </thead>
        <tbody>
           
           
           <?php 
	           
	            $dosyalar=$dosya->sorgu("select * from dosya");
	     foreach($dosyalar as $dosyaValue){
	     
	     echo '<tr class="gradeA">
	      <form id="uyeler">
            <td>  
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox" >
                                </div>
                            </div>
</td>
            <td>  <a href="#" class="thumbnail">
      <img width="150" src="upload/'.$dosyaValue['dosya'].'" alt="..."></a></td>
            <td>'.$dosyaValue['dosya'].'</td>
            <td>'.$dosyaValue['tur'].'</td>
          
              
               <td>  '.$dosyaValue['tarih'].'</td>
             
                  <td class="center hidden-phone"> 
                
                 <a href="index.php?page=dosyayonetimi&git=dosyaForm&formid='.$dosyaValue['id'].'" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   
                 <a id="'.$dosyaValue['id'].'" href="#" title="Sil" class="btn btn-default active dosyaSil">  <i class="fa fa-minus-circle"></i></a>
                  
                  </td>
                  </form>
        </tr>
';
	     }
	           
           ?>
     
     
                </tbody>
        <tfoot>
        <tr>
           <th>&nbsp;</th>
            <th>Resim</th>
            <th>Dosya</th>
         
            <th>Türü</th>
            <th>Tarih</th>
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
