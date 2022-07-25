


      <?php 
	      
	      $slider= new veriTabani ();
	      $slider->tabloadi="slider";
	      
	      
      ?>
              <!-- page heading end-->

        <!--body wrapper start-->
       <form id="slideryonetimi">
 <div class="wrapper">
           <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
           Slider Tablo
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        
        <div class="panel-body">
     <a href="index.php?page=siteyonetimi&git=sliderForm" class="btn btn-primary btn-lg">Yeni Slider Ekle </a>
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th> </th>
            <th>İd</th>
            <th>Adı</th>
            <th>Dil</th>
            <th >Açıklama</th>
            <th >Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     
     <?php  
	     
	     $sliders=$slider->sorgu("select * from slider");
	     foreach($sliders as $slidervalue){
		     
		     
		     echo '<tr class="gradeA"> 
        <td>  
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox" >
                                </div>
                            </div>
</td>
            <td></td>
            <td>'.$slidervalue['adi'].'</td>
            <td>'.$slidervalue['dil'].'</td>
            <td>'.$slidervalue['aciklama'].'</td>
             
             
                  <td class="center hidden-phone"> 
                <a href="index.php?pages=slidericerik" title="Göster" class="btn btn-default active"> <i class="fa fa-laptop"></i></a>
                 <a href="index.php?page=siteyonetimi&git=sliderForm&formid='.$slidervalue['id'].'" title="Ayarlar" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   
                 <a id="'.$slidervalue['id'].'" href="#" title="Sil" class="btn btn-default active slidersil">  <i class="fa fa-minus-circle"></i></a>
                  
                  </td>
        </tr>
';
	     }
	     
     ?>         </tbody>
        <tfoot>
        <tr>
           <th></th>
            <th>İd</th>
            <th>Adı</th>
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