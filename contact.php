<?php

include 'header.php';
$page="contact";

    // about us bölümü  çekim işlemi - fatihmerickoc.com
	  
	  		$stmt=$db->query("SELECT * FROM kurumsal WHERE aktif = '".htmlspecialchars('1')."' and id='".htmlspecialchars('10')."' limit 1");

			$stmt->execute();

			$result=$stmt->fetchAll();
?>

    <div class="hero-wrap" style="background-image: url('images/kurumsal/iletisim_banner.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="etusivu">Etusivu</a></span> <span>/ Ota yhteyttä</span></p>
	            <h1 class="mb-4 bread">Ota yhteyttä</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
		<?php
if($mesaj=1 && ($_POST["ispost"]==1)){
include('mailphp/gonder.php');	
?>
<div class="container">
  
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Onnestui!</strong> Viestisi on saannut. Kiitos.
</div>
</div>
	  
<?php	}  ?>
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Yhteystiedot</h2>
          </div>
          <div class="w-120"></div>
          <div class="col-md-2 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Osoite:</span> </br><?=$result[0]["address"]?></p>
	          </div>
          </div>
          <div class="col-md-2 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Puhelin:</span> </br><a href="<?=$result[0]["phone"]?>"><?=$result[0]["phone"]?></a></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <span>Sähköposti:</span> </br><a href="mailto:<?=$result[0]["email"]?>"><?=$result[0]["email"]?></a>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
				<span>Verkkosivu:</span></br><a href="<?=$result[0]["www"]?>"><?=$result[0]["www"]?></a>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form" method="post" id="form1">
				<input type="hidden" name="ispost" value="1">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nimesi" name="name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Sähköposti"  name="email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Puhelinnumero" name="phone">
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" class="form-control" placeholder="Viesti" name="mesaj" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Lähetä" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
<?php
	
	$mesaj="";
	if($_POST["ispost"]==1){
		//foreach($_POST as $say){
		//	echo $say."</br>";
		//}
	
		
			$stmt=$db->prepare("insert into oneri(adi,email,telefon,aciklama,tarih,aktif) values(?,?,?,?,?,?)");
			$stmt->execute([$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['mesaj'],date("d-m-y h:i:sa"),0]);
	
	
			$mesaj=1;
			
			


	}
			
	?>

			
          <div class="col-md-6 d-flex">
			  
			 <?php
			  echo $result[0]["googlemap"];
			  ?>
         
          </div>
        </div>
      </div>
    </section>
<?php
include 'footer.php';

?>


