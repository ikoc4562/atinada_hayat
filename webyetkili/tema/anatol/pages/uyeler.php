   <div class="page-heading">
           <h3>
               Üyeler
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Kullanıcılar</a>
                </li>
              <li class="active">Üyeler</li>
            </ul>
             <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
            </div>
        <!-- page heading end-->

        <!--body wrapper start-->
       <form id="uyeler">
 <div class="wrapper">
           <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Uyeler Tablo
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        
        <div class="panel-body">
     <a href="index.php?pages=sayfaekle" class="btn btn-primary btn-lg">Uyeler Ekle </a>
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>İd</th>
            <th>Ad Soyad</th>
            <th>E-Posta</th>
            <th>Kayıt Tarihi</th>
            <th>Son Giriş Tarihi</th>
            <th>Üye Grubu</th>
            <th>userActive</th>
             <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     
        <tr class="gradeA">
            <td>  
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox" >
                                </div>
                            </div>
</td>
            <td>125231</td>
            <td>Furkan Özsoy</td>
            <td>furkanozso@gmail.com</td>
            <td>16-06-14</td>
              <td>16-06-14</td>
               <td>Üye</td>
               <td>  <div class="col-sm-12">
                     
                          <select class="form-control input-sm m-bot15">
                                <option>Aktif</option>
                                <option>Pasif</option>
                               
                            </select>
                        </div></td>
             
                  <td class="center hidden-phone"> 
                
                 <a href="#" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   
                 <a href="#" title="Sil" class="btn btn-default active">  <i class="fa fa-minus-circle"></i></a>
                  
                  </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
           <th>&nbsp;</th>
            <th>İd</th>
            <th>Ad Soyad</th>
            <th>E-Posta</th>
            <th>Kayıt Tarihi</th>
            <th>Son Giriş Tarihi</th>
            <th>Üye Grubu</th>
            <th>userActive</th>
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