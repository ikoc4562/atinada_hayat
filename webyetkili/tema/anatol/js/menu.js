$(document).ready(function(e) {
function getURL(name) {
	    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	        results = regex.exec(location.search);
	    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	} 
		$('.menubutton').click(function(event) {
			/* Verileri Ekle  */
			var menuform = $("#menus").serialize();
					$.post('sayfa/post.php?formadi=menuEkle', menuform, function(datas) {
					/*  */
					
				
					if(datas==1){
					location.reload();
					}
					else if (datas==3) {
						alert("Link Adı giriniz");
					}
					
					console.log(datas);	
				});
		
		});	
		
		
		$(".altMenuSil").click(function () {
				var tablolarid = $(this).attr("id");
				
				
					$.post("sayfa/sil.php?sil=altMenuSil",{tablolarid:+tablolarid},function(datam){
			
			console.log(datam);
			
			
					});
		
		$(this).parent().slideUp(1000);
					return false;
		});

			// MENÜ OLUŞTUR
		$('#sayfalar').change(function(){
				var id = $(this).attr("value");
		
				$.post('sayfa/post.php?formadi=menulistele', {sayfa:id}, function(data) {
					/*  */

					$("#veri").html(data);
				});
				
			//console.log(id);
		});
    
	// 

		//// Form Düzenleme Veri çek
		$('.mDuzenle').click(function () {
				var id = $(this).attr("id");
				
				$.post("sayfa/post.php?formadi=mDuzenle",{id:id},function(veriler) {
					
					$("#menus").html(veriler);
					
					
					
					
						$('#sayfalar').change(function(){
				var id = $(this).attr("value");
		
				$.post('sayfa/post.php?formadi=menulistele', {sayfa:id}, function(datav) {
					/*  */

					$("#veri").html(datav);
				});
				
				
				
			
				
			//console.log(id);
		});
				
				
				
				
				//// menubuttonguncelle 
				
				$(".menubuttonguncelle").click(function(){
					var idmiz = $('.menubuttonguncelle').attr("id");		
					var  forms = $("#menus").serialize();		
					$.post('sayfa/post.php?formadi=menubuttonguncelle&id='+idmiz, forms, function(datax) {
					
								console.log(datax);
							}); 

							
							console.log(idmiz);

				});
				
				
					
					
				});
				
					
				
				return false;
		});


/// SİTE YÖNETİMİ MENU KATEGORİ SIRALAMASI 

 $( ".menulerlist" ).sortable({
	 
	 			update: function (event, ui) {
	 				var mid = getURL("formid");
	 				var post = $(this).sortable('serialize');
							
							$.post("sayfa/post.php?formadi=menusira&mid="+mid,{list:post},function(mdata){
								
								console.log(mdata);
							});
					
							
						//console.log(post);		 			
	 			}
	 
 });


/// DOSYA YÖNETİMİ KATEGROİ SIRALAMASI 

$( ".dosyaKategoriList" ).sortable({
	 
	 			update: function (event, ui) {
	 				var mid = getURL("formid");
	 				var post = $(this).sortable('serialize');
							
							$.post("sayfa/post.php?formadi=dosyakategorisirala&mid="+mid,{list:post},function(mdata){
								
								console.log(mdata);
							});
					
							
						//console.log(post);		 			
	 			}
	 
 });





///// -------> DOSYA POPUP YERİ 
$( ".dosyaPopup" ).draggable();

$(".dosyaPopupClick").click(function () {
	
	$(".dosyaPopup").slideDown();
	
	return false;
});


function iliskile () {
	
	$(".iliskile").live("click", function () {
	
	
	var id  = $(this).attr("id");
	var codeID =$("#codeID").attr("value");
	
	//console.log(codeID);
		$.post("sayfa/post.php?formid=dosyaIliskile",{fotoid:id,codeID:codeID},function(idata){
			
			//console.log(idata);
	
			$(".iliskiListele").html(idata);	
			
			
			$(".iliskiliSil").click(function () {
				
					var id =$(this).arrt("id");
				
				console.log("İDİSİ :"+id);
			});
			
	
		});
	/*
		$.post("sayfa/post.php?formid=iliskiliDosyalar",{codeID:CodeID},function(ddata){
			
			console.log(ddata);
		});
	
	
	
	/*
	$(".eklenenFotolar").remove();
							console.log("tıklandı");
				var id = $(this).attr("id");
				var img = $(this).attr("src");
				
				$('.iliskiliresim').attr("value",id);
				
					console.log(img);	
					$(".iliskiListele").append('<img class="eklenenFotolar" width="100" src="'+img+'" >');
						*/
						
						
						return false;
						
	
	
	});
				

				
	
}


$(".dosyaKatListele").click(function () {
	var id =  $(this).attr("id");
	
		$(".dosyayukle").hide();
	$("#dosyaSonuc").show();
		$.post("sayfa/post.php?formadi=dosyaKatListele",{id:id},function (datalar) {
			
		
			$(".fotoBoyut").slideUp();
			console.log(datalar);
			$("#dosyaSonuc").html(datalar);
			

				iliskile ();
			
			$(".dosyaBoyut").click( function () {
				
					var id = $(this).attr("id");
		
					$(".fotoBoyut").slideDown();
					
					$("#dosyaid").attr("value",id);
					
					$(this).parent().parent().css({
						"opacity" :"0.4"
				});
				
		
				
				
			
				return false; 
			});
			
		});
		
		
		
});

// İLİŞKİLİ RESİMLERE EKLENEN FOTOLARI SİLİYOR 							
$(".eklenenFotolar").live("click",function () {
		
						$(this).remove();
						
						$(".iliskiliresim").attr("value","");
			
				});

	/// ------> DOSYA BOYUTLANMA FORMUNDAN GELEN 
$(".dosyaBoyutButton").click( function () {

		var form = $("#dosyaBoyut").serialize();
							
		$.post("sayfa/post.php?formadi=dosyaBoyut", form, function (bdata) {
										
	
		
			if(bdata==3){
				
				alert("Lütfen Genişlik Belirtiniz");
			}
			else if(bdata==2){
				alert("Girmiş olduğunuz değer RAKAM değil");
			}else{
				
					$("#resimSonuc").html(bdata);
					
				iliskile ();	
					
					
			}
		
		});

});


// Dosya Yükle aktif etme 
function dosyayuklebutton(){
$(".dosyayuklebutton").click(function() {
		$("#dosyaSonuc").hide();
		$(".dosyayukle").show();
});

}

dosyayuklebutton();


});
