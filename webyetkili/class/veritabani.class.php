<?php
class  veriTabani {


	public $tabloadi;
	public 	$tagAc;
	public  $tagKapat;

	// sayfa oluştur fonksiyonu
	public  function olustur($data){
		// data değişkeni array olarak yükleniyor
		global $db;
		$id = $db->insert($this->tabloadi, $data);
		if($id){echo '1'; }else{ mysql_error(); }

	}



///  Sayfa Güncelle id li

	public function guncelle($data,$id){
		global $db;
		$db->where('id', $id);
		if($db->update($this->tabloadi, $data)){ echo '1'; }else{ mysql_error(); }

	}

	// sayfa güncelle isme göre this
	public function guncelleThis($data,$where,$name){
		// İSME GÖRE Günceller
		global $db;
		$db->where('$where', $name);
		if($db->update($this->tabloadi, $data)){ /*echo 'Sayfa güncellendi*/ }else{ mysql_error(); }

	}

	//Lİsteleme
	public function sorgu($sorgu){
		global $db;
		$sql = $db->rawQuery($sorgu);
		return $sql;

	}

	public function sorgu2($sorgu){
		global $db;
		$sql = mysql_query($sorgu);

			$sorArray = array();

			while($syaz = mysql_fetch_array($sql)){

				$sorArray[]=$syaz;

			}
			return $sorArray;

	}

	// admin sayfa sil ID Ye göre Siler
	public function sil($id){
		global $db;
		if($id==""){
			echo "hata İd Boş ";
		}else {
			$db->where('id', $id);
			if($db->delete($this->tabloadi)){ /*echo "SİLİNDİ"; */ }else{ echo 'SİLİNEMİYOR ';  }
		}
	}


	// Tabloda ne kadar veri varsa çeker  ekrana array olarak dönüyor print_r() içeirisinde yazdır json olarak yazdır
	public  function tumcek($kactane=NULL){
		global $db;
	  $users = $db->get($this->tabloadi,null,$kactane);
		return $users;

	}

	// Tek veri yazdır  ID ye Göre tek bir veri yazar
	public function tekveri($db,$veri,$id){
		//global $db;
		$sec = ($db->query("SELECT * FROM $this->tabloadi where id='$id'"))->fetchAll();
		return $sec[0][$veri];
	}

	// Tek Satırlı Tablolardan veri çeker
	public function sabitVeri($db,$veri){
		global $db;
		$sec = mysql_fetch_assoc(mysql_query("SELECT * FROM $this->tabloadi order by id desc "));
		return $sec[$veri];
	}

	public function tekveri2($veri,$id=NULL){
		global $db;
		$db->where ("id",$id);
		$user = $db->getOne($this->tabloadi);
		return $user[$veri];
	}
	//// SORGU YAP MA FONKSİYONU

	public function sor($db,$sorgu){
		$sql = $db->query($sorgu);

		return sql;

	}

	// Tekli Veri istediğin örnek  : thisVeri("adsoayad","aliveli", "idyaz");
	public function thisVeri($db,$where,$veri,$istek) {

			//$sor = mysql_query("select * from $this->tabloadi where $where='$veri'");
			$sor = $db->query("select * from $this->tabloadi where $where='$veri'");
			$yaz = $sor->fetchAll();

			return $yaz[0][$istek];
	}

	// Kategori  Options
	public  function kategoriOption($db,$tip=NULL,$id=0,$string=0){

		$sql_kat = $db->query("select * from $this->tabloadi where ustid='$id'");


		if($sql_kat->rowCount()>0){

			$variable = $sql_kat->fetchAll();
			foreach ($variable as $row) {
				# code...
			//while ($row = mysql_fetch_array($sql_kat)){
					$ustid = $this->tekveri($db,"ustid", $tip);
						if ($row['id']==$ustid) {
							$selected="selected";
						}else{
							$selected="";
						}

				echo '<option '.$selected.' value="'.$row['id'].'" >'.str_repeat("-", $string).$row['adi'].$tip.'</option>';
					$this->kategoriOption($db,$ustid,$row['id'], $string+1);

			}

		}else {

			return false;
		}

	}



	// Dosya Yönetimi  Kategoru Listeleme de Kullanılıyor

	public  function menuListe($id=0,$string=0){

		$sql_kat = $db->query("select * from $this->tabloadi where ustid='$id'");


		if(mysql_affected_rows()){


			while ($tabloValue = mysql_fetch_array($sql_kat)){

				if($tabloValue[durum]==0){
					$durum = "Pasif";
				}else {
					$durum="Aktif";
				}


				echo ' <li id="list_'.$tabloValue['id'].'" class="breadcrumb ">'.str_repeat("# ", $string).$tabloValue['adi'].'  <a href="#" id="'.$tabloValue['id'].'" class="kDuzenle">Düzenle</a> | <a  id="'.$tabloValue['id'].'" class="dosyaKategoriSil" href="#">sil</a></li>';





				$this->menuListe($tabloValue['id'],$string+1);
			}



		}else {

			return false;
		}

	}

}
