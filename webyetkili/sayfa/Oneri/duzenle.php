<?php

$sql = $db->prepare("UPDATE oneri SET aktif = 1  WHERE id = :id");
$sql->execute(['id'=>$_GET['id']]);


$ssql = $db->prepare("SELECT * FROM oneri WHERE id = :id");
$ssql->execute(['id'=>$_GET['id']]);
$upcek = $ssql->fetchAll();
?>

  <div class="wrapper">
         <?php if($mesaj != ""){?>
 <div class="alert alert-success">Editoitiin!
</div>
<div class="clear"></div><BR /><BR />
<?php }?>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Näyttää</h3>
                        </div>
                        <div class="panel-body">

   <div id="tabs">



            <br />
 <div class="col-sm-12">
  <label> Nimi:</label>&nbsp;&nbsp;&nbsp;<?=$upcek[0]['adi']?>
</div><br /><br />


<div class="col-sm-12">
  <label> Puhelinnumero:</label>&nbsp;&nbsp;&nbsp;<?=$upcek[0]['telefon']?>
</div><br /><br />


<div class="col-sm-12">
  <label> Sähköposti:</label>&nbsp;&nbsp;&nbsp;<?=$upcek[0]['email']?>
</div><br /><br />
<div class="col-sm-12">
  <label> Päivämäärä:</label>&nbsp;&nbsp;&nbsp;<?=$upcek[0]['tarih']?>
</div><br /><br />

<div class="col-sm-12">
  <label> Neuvoja / Viestejä:</label>&nbsp;&nbsp;&nbsp;<?=$upcek[0]['aciklama']?>
</div><br />




   </div>
  </div>
  </div>

<script type="text/javascript" charset="utf-8">
    (function(){
      var tabs =document.getElementById('tabs');
      var nav = tabs.getElementsByTagName('input');

      /*
      * Hide all tabs
      */
      function hideTabs(){
        var tab = tabs.getElementsByTagName('div');
        for(i in tab){
          if(tab[i].className == 'dil'){
            tab[i].className = tab[i].className + ' hide';
          }
        }
      }

      /*
      * Show the clicked tab
      */
      function showTab(tab){
        hideTabs();
        document.getElementById(tab).className = document.getElementById(tab).className.replace('hide', '');
      }

      hideTabs(); /* hide tabs on load */

      /*
      * Add click events
      */
      for(i in nav){
        nav[i].onclick = function(){
          showTab(this.className);
        }
      }
    })();
  </script>
