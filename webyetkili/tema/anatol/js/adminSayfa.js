$(document).ready(function(e) {
	function getURL(name) {
	    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	        results = regex.exec(location.search);
	    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

	/// adres satırı  linki alma örnek  http://siteadi.com/
	function link(){
		var  ustlink =window.location.origin; /// http://siteadi.com/
		var  patyolu = window.location.pathname;
		var linkim =  patyolu.split("/");
		var sondizi = linkim.length-2;
		var urle = ustlink+'/'+linkim[sondizi];
		return urle;
	}

	// ÇIKIŞ
	$(".cikis").click(function () {

		  $.removeCookie("kullanici");
		  location.reload();
		alert("asdas");

	});

	// Admin Sayfa Formu Ekle
	$("#adminbutton").click(function () {
		var form = $("#adminForm").serialize();
		var formid = $("#adminForm").attr("formid");

			if(formid==""){
				// Sayfa Oluşturma
		$.post("sayfa/post.php?formadi=adminForm",form,function(data){

				console.log(data);
				$("#sorgu").html(data);
					if(data==1){
					location.reload();
					}

				});
			}else{
				// Sayfa GÜNCELLEME
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=adminFormGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
			}
	});


//Uye Ekleme
	$(".uyebutton").click(function () {
		var form = $("#uyeForm").serialize();
		var formid = $("#uyeForm").attr("formid");

			if(formid==""){
				// Sayfa Oluşturma
		$.post("sayfa/post.php?formadi=uyeForm",form,function(data){

				console.log(data);
				$("#sorgu").html(data);
					if(data==1){
					location.reload();
					}

				});
			}else{
				// Uye Güncelle
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=uyeGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
			}
	});



//Kullanıcı Grup Ekleme
	$(".userbutton").click(function () {
		var form = $("#userForm").serialize();
		var formid = $("#userForm").attr("formid");

			if(formid==""){
				//Kullanıcı Grup Oluşturma
		$.post("sayfa/post.php?formadi=userForm",form,function(data){

				console.log(data);
				$("#sorgu").html(data);
					if(data==1){
					location.reload();
					}

				});
			}else{
				// Kullanıcı Grup Güncelle
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=userGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
			}
	});



//dosyaForm   Ekleme YERİ
	$(".dosyaFormButton").click(function () {
		var form = $("#dosyaForm").serialize();
		var formid = $("#dosyaForm").attr("formid");


				// Kullanıcı Grup Güncelle
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=dosyaForm&id="+sayfaid,form,function(datam){


						if(datam==1){
						location.reload();
						}

					});

	});


/*
 * SİLME YERİ
 */
	// Admin Tablosu Silme yeri
	$(".tabloSil").click(function () {
			var tabloid =$(this).attr("id");
			console.log(tabloid);
			$.post("sayfa/sil.php?sil=adminTablo",{tabloid:+tabloid},function(data){

				console.log(data);


			});

			$(this).parent().parent().hide('1500');
		return false;
	});

	// İÇERİK TABLOSU SİL Sayfalar menusu
	$(".icerikSil").click(function () {
		var tabloid =$(this).attr("id");

		//alert(tabloid);
		$.post("sayfa/sil.php?sil=icerikSil",{tabloid:+tabloid},function(data){

			console.log(data);


		});

		$(this).parent().parent().hide('2500');
	return false;
});

	$(".sitemenuSil").click(function () {
		var tabloid =$(this).attr("id");

		//alert(tabloid);
		$.post("sayfa/sil.php?sil=sitemenuSil",{tabloid:+tabloid},function(data){

			console.log(data);


		});

		$(this).parent().parent().hide('2500');
	return false;
});

// Slider Silme
	$(".slidersil").click(function () {
			var tabloid =$(this).attr("id");


			$.post("sayfa/sil.php?sil=sliderTablo",{tabloid:+tabloid},function(data){

				console.log(data);


			});

			$(this).parent().parent().hide('1500');
		return false;
	});

	// Parcacık Silme
	$(".parcaciksil").click(function () {
			var tabloid =$(this).attr("id");


			$.post("sayfa/sil.php?sil=parcaciksil",{tabloid:+tabloid},function(data){

				console.log(data);


			});

			$(this).parent().parent().hide('1500');
		return false;
	});

	// Uye Silme
	$(".uyesil").click(function () {
			var tabloid =$(this).attr("id");


			$.post("sayfa/sil.php?sil=uyesil",{tabloid:+tabloid},function(data){

				console.log(data);


			});

			$(this).parent().parent().hide('1500');
		return false;
	});

	// Uye Silme
	$(".usersil").click(function () {
			var tabloid =$(this).attr("id");


			$.post("sayfa/sil.php?sil=usersil",{tabloid:+tabloid},function(data){

				console.log(data);


			});

			$(this).parent().parent().hide('1500');
		return false;
	});




	// DOSYA KATEGORİ SİL
	$(".dosyaKategoriSil").click(function () {
			var tabloid =$(this).attr("id");

			console.log(tabloid);
			$.post("sayfa/sil.php?sil=dosyaKategoriSil",{tabloid:+tabloid},function(data){

				console.log(data);


			});

			$(this).parent().hide('1500');
		return false;
	});


	// FOTOĞRAF fotograf SİL  SİL
	$(".dosyaSil").click(function () {
			var tabloid =$(this).attr("id");

			console.log(tabloid);
			$.post("sayfa/sil.php?sil=dosyaSil",{tabloid:+tabloid},function(data){

				console.log(data);


			});

			$(this).parent().parent().hide('1500');
		return false;
	});


/*
 * SİLME BİTİŞ
 */

	//// ---- > İçerik sayfası ekleme

	//console.log(link());

	/*
	 * SİTE İÇERİK BAŞLANGIÇ
	 */

	$("#icerikSayfaButton").click(function () {
		var form = $("#sayfaOlustur").serialize();
		var formid = $("#sayfaOlustur").attr("formid");

			if(formid==""){
				// Sayfa Oluşturma
		$.post("sayfa/post.php?formadi=icerikForm",form,function(data){

				console.log(data);
				$("#sorgu").html(data);
					if(data==1){
					location.reload();
					}

				});
			}else{


				// Sayfa GÜNCELLEME
				var sayfaid = getURL("formid");



				$.post("sayfa/post.php?formadi=icerikSayfaGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
			}
	});

	///Site Genel Ayarlar

$(".genelayarlarbutton").click(function () {
		var form = $("#genelayarlar").serialize();
		var formid = $(".genelayarlarbutton").attr("id");


				// Sayfa GÜNCELLEME


				$.post("sayfa/post.php?formadi=genelayarlarGuncelle&id="+formid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==14){
						location.reload();
						}

					});

	});


	///Mail Ayarlar

$(".mailayaributton").click(function () {
		var form = $("#mailayarlari").serialize();
		var formid = $(".mailayaributton").attr("id");


				// Mail Ayarlarini GÜNCELLEME


				$.post("sayfa/post.php?formadi=mailayariGuncelle&id="+formid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
					});


				// Google Ayarlarini GÜNCELLEME

		$(".googleayaributton").click(function () {
		var form = $("#googleayarlari").serialize();
		var formid = $(".googleayaributton").attr("id");

				$.post("sayfa/post.php?formadi=googleayariGuncelle&id="+formid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
					});



// Dil Ayarlarını GÜNCELLEME

		$(".dilayaributton").click(function () {
		var form = $("#dilayarlari").serialize();
		var formid = $(".dilayaributton").attr("id");

				$.post("sayfa/post.php?formadi=dilayariGuncelle&id="+formid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
					});


					// Dil Ayarlarını GÜNCELLEME

		$(".sosyalbutton").click(function () {
		var form = $("#sosyalmedya").serialize();
		var formid = $(".sosyalbutton").attr("id");

				$.post("sayfa/post.php?formadi=sosyalayariGuncelle&id="+formid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
					});

	/// SİTE MENU EKLEME FORMU
	$(".sitemenuekle").click(function () {
		var form = $("#menuEkle").serialize();
		var formid = $("#menuEkle").attr("formid");

			if(formid==""){
				// Sayfa Oluşturma
		$.post("sayfa/post.php?formadi=menuformmEkle",form,function(data){

				console.log(data);
				$("#sorgu").html(data);
					if(data==1){
					location.reload();
					}

				});
			}else{
				// Sayfa GÜNCELLEME
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=menuformmGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
			}
	});

/// Slider Yönetimi
$(".sliderbutton").click(function () {
		var form = $("#sliderForm").serialize();
		var formid = $("#sliderForm").attr("formid");

			if(formid==""){
				// Sayfa Oluşturma
		$.post("sayfa/post.php?formadi=sliderForm",form,function(data){

				console.log(data);
				$("#sorgu").html(data);


					if(data==1){
					location.reload();
					}

				});
			}else{
				// Slider GÜNCELLEME
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=sliderFormGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
			}
	});
///Slider Yonetimi Bitiş




/// Sayfa Parcacık Ekleme
$(".parcacikbutton").click(function () {
		var form = $("#parcacikForm").serialize();
		var formid = $("#parcacikForm").attr("formid");

			if(formid==""){
				// Sayfa Oluşturma
		$.post("sayfa/post.php?formadi=parcacikForm",form,function(data){

				console.log(data);
				$("#sorgu").html(data);


					if(data==1){
					location.reload();
					}

				});
			}else{
				// Parcacik GÜNCELLEME
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=parcacikFormGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}

					});
			}
	});


	/// ----> Seolink içerik sayfasın dan geliyor sayfa oluşturma formu


/// DOSYA KATEGORİ OLUŞTURMA YERİ
$(".dosyaKategoriButton").click(function () {
		var form = $("#dosyaKategori").serialize();
		var formid = $("#dosyaKategori").attr("formid");

			if(formid==""){
				// kategori Oluşturma
		$.post("sayfa/post.php?formadi=dosyaKategoriOlustur",form,function(data){

				console.log(data);
				$("#sorgu").html(data);


					if(data==1){
					location.reload();
					}else if (data==2){

						alert(" Lütfen KATEGORİ ADI GİRİN");
					}

				});
			}else{
				// kategori GÜNCELLEME
				var sayfaid = getURL("formid");

				$.post("sayfa/post.php?formadi=dosyaKategoriGuncelle&id="+sayfaid,form,function(data){

					console.log(data);
					$("#sorgu").html(data);
						if(data==1){
						location.reload();
						}


					});
			}
	});





	$("#baslik").keyup(function () {
		var seo=	$(this).val();

			$.post("sayfa/post.php?formadi=seokelime",{seo:seo},function(data){
				 $("#seo").text(data);
				 $("#seobaslik").attr("value",data);
				 console.log(data);
			});
	});


	////-- Menu Sıra Kaydırmaca
	$("#sortable").sortable();



});
