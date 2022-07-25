<?php
class  adminSayfa {

	private $tabloadi = "adminsayfa";
	public 	$tagAc;
	public  $tagKapat;

	// admin sayfa oluştur fonksiyonu
	public  function adminOlustur($db,$data){
		// data değişkeni array olarak yükleniyor
		//global $db;
		if($data['durum']== NULL){
			$data['durum'] = 0;
		}
		echo "omer".$data['aktif'].$id;
		//$id = $db->insert($this->tabloadi, $data);
		$id = $db->prepare("INSERT INTO $this->tabloadi (adi, ustid, icon,codeID,durum,link,include) VALUES (:adi, :ustid, :icon,:codeID,:aktif,'',:include)");
		$id->execute(['adi'=>$data['adi'], 'ustid'=>$data['ustid'], 'icon'=>$data['icon'],'codeID'=>$data['codeID'],'aktif'=>$data['durum'],'include'=>$data['include']]);
		if($id){echo '1'; }else{ //mysql_error();
		 }

	}



/// admin Sayfa Güncelle id li

	public function adminGuncelle($db,$data,$id){
		/*
		global $db;
		$db->where('id', $id);

		if($db->update($this->tabloadi, $data)){ /*echo 'Sayfa güncellendi }else{ mysql_error(); }
	*/
		$id = $db->prepare("UPDATE $this->tabloadi SET adi=:adi, ustid=:ustid, icon=:icon,codeID=:codeID,durum=:durum,include=:include WHERE id=$id");
		$id->execute(['adi'=>$data['adi'], 'ustid'=>$data['ustid'], 'icon'=>$data['icon'],'codeID'=>$data['codeID'],'durum'=>$data['durum'],'include'=>$data['include']]);
		if($id){
			echo 'Sayfa güncellendi';
		}else{
			echo 'Hata';
		}

	}

	// sayfa güncelle isme göre this
	public function adminGuncelleThis($db,$data,$where,$name){
		/*
		// İSME GÖRE Günceller
		global $db;
		$db->where('$where', $name);
		if($db->update($this->tabloadi, $data)){ /*echo 'Sayfa güncellendi }else{ mysql_error(); }
		*/

	}

	//Lİsteleme
	public function sorgu ($db,$sorgu){
		//global $db;
		$sql = $db->query($sorgu);
		return $sql;

	}

	// admin sayfa sil ID Ye göre Siler
	public function adminSil($db,$id){

		global $db;
		if($id==""){
			echo "hata İd Boş ";
		}else {
			$asd = $db->prepare("DELETE FROM $this->tabloadi WHERE id=:id");
			$asd->execute(['id'=>$id]);
			if($asd){
				echo "SİLİNDİ";
			}else{
				echo "HATA";
			}
			//$db->where('id', $id);
			//if($db->delete($this->tabloadi)){ /*echo "SİLİNDİ";  }else{ echo 'SİLİNEMİYOR ';  }
		}

	}


	// Tabloda ne kadar veri varsa çeker  ekrana array olarak dönüyor print_r() içeirisinde yazdır json olarak yazdır
	public  function adminTumcek($db,$kactane=NULL){
		/*
		global $db;
	  $users = $db->get($this->tabloadi,null,$kactane);
		return $users;
		*/

	}

	// Tek veri yazdır  ID ye Göre tek bir veri yazar
	public function adminTekveri($db,$veri,$id){
		//global $db;
		$sec = ($db->query("SELECT * FROM adminsayfa where id='$id'"))->fetchAll();
		return $sec[0][$veri];
	}



	public function adminTekveria($db,$veri,$id){
		/*
		global $db;
		$db->where ("id",$id);
		$user = $db->getOne($this->tabloadi);
		return $user[$veri];
		*/
	}


	// Admin Mneu alt kategori

	public  function adminKategoriMenus($db,$id=0,$string=0){

		//$sql_kat = $db->prepare("select * from $this->tabloadi where ustid='$id' and durum='1'");
		$sql_kat = $db->query("select * from $this->tabloadi where ustid='$id' and durum='1'");


		if($sql_kat->rowCount() > 0){

			echo '<ul class="sub-menu-list">';
			$variable = $sql_kat->fetchAll();
			foreach ($variable as $row) {
				# code...
			//while ($row = mysql_fetch_array($sql_kat)){
				echo '   <li><a id="'.$row['id'].'" href="index.php?page=sayfalar&id='.$row['id'].'"><i class="fa '.$row['icon'].'"></i> <span>'.$row['adi'].'</span></a></li>';


			}
			echo '</ul>';
		}else {
			return false;
		}

	}


	// Admin Ana Kategori

	public  function adminKategoriMenu($db,$id=0,$string=0){

			$sql_kat = $db->query("select * from $this->tabloadi where ustid='$id' and durum='1'");


			if($sql_kat->rowCount()>0){

				$variable = $sql_kat->fetchAll();
				foreach ($variable as $row) {
					# code...
				//while ($row = mysql_fetch_array($sql_kat)){
					echo '   <li class="menu-list"><a href="index.php"><i class="fa '.$row['icon'].'"></i> <span>'.$row['adi'].'</span></a>';

						$this->adminKategoriMenus($db,$row['id'],$string +1);
					echo '		</li>';


				}

			}else {

				return false;
			}

	}
	// admin Options
	public  function adminKategoriOption($db,$tip=NULL,$id=0,$string=0){

		$sql_kat = $db->query("select * from $this->tabloadi where ustid='$id' and durum='1'");


		if($sql_kat->rowCount()>0){
			$variable = $sql_kat->fetchAll();
			foreach ($variable as $row) {
				# code...
			//while ($row = mysql_fetch_array($sql_kat)){
					$ustid = $this->adminTekveri($db,"ustid", $tip);
						if ($row['id']==$ustid) {
							$selected="selected";
						}else{
							$selected="";
						}

				echo '<option '.$selected.' value="'.$row['id'].'" >'.str_repeat("-", $string).$row['adi'].'</option>';
					$this->adminKategoriOption($db,$ustid,$row['id'], $string+1);

			}

		}else {

			return false;
		}

	}

	// Admin Tablo

	public  function tabloListe($db,$id=0,$string=0){
		$val = $this->tabloadi;
		$sql_kat = $db->prepare("select * from $val where ustid='$id'");
		$sql_kat->execute();


		if($sql_kat->rowCount()>0){
			$variable = $sql_kat->fetchAll();
			foreach ($variable as $tabloValue) {
				# code...
			//while ($tabloValue = mysql_fetch_array($sql_kat)){

				if($tabloValue['durum']==0){
					$durum = "Pasif";
				}else {
					$durum="Aktif";
				}
			echo '

        <tr  class="gradeA">
            <td>
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox" >
                                </div>
                            </div>
</td>
            <td>'.$tabloValue['codeID'].'</td>
            <td>'.str_repeat("-", $string).$tabloValue['adi'].'</td>

            <td class="center hidden-phone">'.$tabloValue['tarih'].'</td>
              <td class="center hidden-phone">'.$durum.'</td>

                  <td class="center hidden-phone">



                 <a id="'.$tabloValue['id'].'" href="index.php?page=adminsayfa&git=form&formid='.$tabloValue[id].'" title="Düzenle" class="btn btn-default active tabloDuzenle">   <i class="fa fa-gear"></i></a>

                 <a id="'.$tabloValue['id'].'" href="#" title="Sil" class="btn btn-default active tabloSil">  <i class="fa fa-minus-circle"></i></a>

                  </td>
        </tr>
        ';
				$this->tabloListe($db,$tabloValue['id'],$string+1);
			}

		}else {

			return false;
		}

	}

}
