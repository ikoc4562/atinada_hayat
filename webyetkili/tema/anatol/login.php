<?php
/*
$ipadres=  $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

$adres='10.0.0.120/webyetkili/';

if($ipadres<>$adres) {
header("Location: ../../../404.html");
}

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
  
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Hallitus Panelli</title>

    <link href="tema/anatol/css/style.css" rel="stylesheet">
    <link href="tema/anatol/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" method="post"   >
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Hallitus Panelli Kirjaudu</h1>
            <img src="tema/anatol/images/logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" id="eposta" class="form-control" name="eposta" placeholder="e-Posta ID" autofocus>
            <input type="password" class="form-control" name="sifre" placeholder="Şifre">

            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
              
            </div>
          

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Şifreni mi  Unuttun ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Yeni şifrenizi alabilmeniz için lütfen bizimle iletişime geçiniz. <a href="http://www.fatihmerickoc.com" target="_blank">http://www.fatihmerickoc.com</a></p>

                    </div>
                  
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="tema/anatol/js/jquery-1.10.2.min.js"></script>
<script src="tema/anatol/js/bootstrap.min.js"></script>
<script src="tema/anatol/js/modernizr.min.js"></script>

<script>
	
		// GİRİŞ BUTONU VE JS
	$(".btn-login").click(function () {
		
		console.log("tıklandı");
				var form = $(".form-signin").serialize();
					var eposta =$("#eposta").val();
					
					
					$.post("sayfa/login.php",form,function(giris) {
						//alert(giris);
						console.log(giris);	
						
						if(giris==1){
						document.cookie="kullanici="+eposta;	
						
						
						location.reload();
						}else{
							
							alert("Anna käyttäjänimesi ja salasanasi")
						}
						
					});
		
		
		
		return false;
	});
	
</script>


</body>
</html>
