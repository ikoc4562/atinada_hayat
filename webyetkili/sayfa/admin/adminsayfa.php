
<?php

?>



        <!--body wrapper start-->

       <form id="haberler"> <div class="wrapper">
           <div class="col-sm-12">
             <span class="pull-right">     <a class="or fa-user-md" href="#"></a></span> </div>
              <div class="clr"></div>

           <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Haberler Tablo
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>

        <div class="panel-body">
     <a href="index.php?page=adminsayfa&git=form" class="btn btn-primary btn-lg"> Admin Sayfası Ekle </a>
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>Code İd</th>
            <th>Başlık</th>

            <th >Tarih</th>
            <th >Durum</th>
            <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody >
        <?php

        $classcek = new adminSayfa();
       		$classcek->tabloListe($db);
        ?>
       </tbody>
        <tfoot>
        <tr>
            <th>&nbsp;</th>
            <th>Code İd</th>
            <th>Başlık</th>
            <th >Tarih</th>
            <th>Durum</th>
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
