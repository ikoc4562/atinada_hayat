<?php
class  sayfa {
	
	
	// sayfa oluştur fonksiyonu 
	public  function sayfaOlustur($data){
		// data değişkeni array olarak yükleniyor
		global $db;
		$id = $db->insert('sayfa', $data);
if($id){echo '<h1>Sayfa Oluşturuldu id no:='.$id.'</h1>'; }else{ mysql_error(); }
    
	}
	


/// Sayfa Güncelle id li 

	public function sayfaGuncelle($data,$id){
		global $db;
		$db->where('id', $id);
		if($db->update('sayfa', $data)){ /*echo 'Sayfa güncellendi*/ }else{ mysql_error(); }
		
	}
	
	// sayfa güncelle isme göre this 
	public function sayfaGuncelleThis($data,$where,$name){
		// İSME GÖRE Günceller
		global $db;
		$db->where('$where', $name);
		if($db->update('sayfa', $data)){ /*echo 'Sayfa güncellendi*/ }else{ mysql_error(); }
	
	} 
	
	// sayfa sil ID Ye göre Siler 
	public function sayfaSil($id){
		global $db;
		$db->where('id', $id);
		if($db->delete('sayfa')){ /*echo "SİLİNDİ"; */ }else{ echo 'SİLİNEMİYOR ';  }
	}
	
	
	// Tabloda ne kadar veri varsa çeker  ekrana array olarak dönüyor print_r() içeirisinde yazdır json olarak yazdır 
	public  function sayfaTumcek($kactane=NULL){
		global $db;
	  $users = $db->get('sayfa',null,$kactane);
		return $users;
	
	}
	
	// Tek veri yazdır  ID ye Göre tek bir veri yazar
	public function sayfaTekveri($veri,$id){
		global $db;
		$db->where ("id",$id);
		$user = $db->getOne("sayfa");
		return $user[$veri];
	}
	
}