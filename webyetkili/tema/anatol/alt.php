

    </div>
 <?php  //include("sayfa/dosyaPopup.php"); ?>
<div id="yukleniyor"></div>

    <!-- main content end-->
</section>

<!-- Sayfa Genel Javascript-->
<script src="tema/anatol/js/jquery-1.10.2.min.js"></script>

<script src="tema/anatol/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="tema/anatol/js/adminSayfa.js"></script>
<script type="text/javascript" src="tema/anatol/js/menu.js"></script>
<script src="tema/anatol/js/jquery-migrate-1.2.1.min.js"></script>
<script src="tema/anatol/js/bootstrap.min.js"></script>
<script src="tema/anatol/js/modernizr.min.js"></script>
<script src="tema/anatol/js/jquery.nicescroll.js"></script>
<!-- Sayfa Genel Javascript-->
<!-- Sayfa Genel Javascript-->

<!--Sayfalar Tablo-->
<script type="text/javascript" language="javascript" src="tema/anatol/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="tema/anatol/js/data-tables/DT_bootstrap.js"></script>
<!--Sayfalar Tablo-->

<!--ios7-->
<script src="tema/anatol/js/ios-switch/switchery.js" ></script>
<script src="tema/anatol/js/ios-switch/ios-init.js" ></script>
<!--icheck -->
<script src="tema/anatol/js/iCheck/jquery.icheck.js"></script>
<script src="tema/anatol/js/icheck-init.js"></script>

<!--multi-select-->
<script type="text/javascript" src="tema/anatol/js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="tema/anatol/js/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script src="tema/anatol/js/multi-select-init.js"></script>

<!--spinner-->
<script type="text/javascript" src="tema/anatol/js/fuelux/js/spinner.min.js"></script>
<script src="tema/anatol/js/spinner-init.js"></script>

<!--file upload-->
<script type="text/javascript" src="tema/anatol/js/bootstrap-fileupload.min.js"></script>

<!--tags input-->
<script src="tema/anatol/js/jquery-tags-input/jquery.tagsinput.js"></script>
<script src="tema/anatol/js/dropzone.js"></script>
<script src="tema/anatol/js/tagsinput-init.js"></script>
<!--Ck Editor -->
<script type="text/javascript" src="tema/anatol/js/ckeditor/ckeditor.js"></script><!--Ck Editor -->
<!--bootstrap input mask-->
<script type="text/javascript" src="tema/anatol/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="tema/anatol/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<script type="text/javascript" src="tema/anatol/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<!--Galeri Sıralama-->

<!-- Galeri İçerik-->
<script type="text/javascript">
    $(function() {
        var $container = $('#gallery');
        $container.isotope({
            itemSelector: '.item',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        // filter items when filter link is clicked
        $('#filters a').click(function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector});
            return false;
        });

        $("#yukleniyor").hide();


        	$('.formbutton').bind	("submit",function ( ) {
		var formlarim = $('#formform').serialize();
		var icerik = $(".icerik").val();
		console.log(formlarim);

	});
    });
</script>
<script src="tema/anatol/js/jquery.isotope.js"></script>
<!-- Galeri İçerik-->

<!--common scripts for all pages-->
<script src="tema/anatol/js/scripts.js"></script>
<script src="tema/anatol/js/dynamic_table_init.js"></script>
<!--common scripts for all pages-->




</body>
</html>
