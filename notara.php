<?php

$baslik = $_POST["notara"];

$baglan=mysqli_connect("localhost","root","","notekle"); 
mysqli_set_charset($baglan, "utf8");


if($baslik==""){
	$hata="<script>alert('Boş alan bırakmayınız')</script>";
	echo $hata;
	header("Refresh:0.1; url=notara.html");
}
else{
	
	echo '<table>';
		echo '<tr>';
			echo '<td width="180">Not ID</td>';
			echo '<td width="180">Tarih</td>';
			echo '<td width="180">Not Başlık</td>';
			echo '<td width="180">Not İçerik</td>';
			echo '<td width="180"></td>';
			echo '<td width="180"></td>';
		echo '</tr>';
	echo '</table>';		
	$sqlara="SELECT * FROM tbl_notekle WHERE not_baslik='$baslik'";
	$kontrol=mysqli_query($baglan,$sqlara);
	if(mysqli_num_rows($kontrol)>0){
		while($oku=mysqli_fetch_array($kontrol)){
			echo '<table>';
				echo '<tr>';
					echo '<td width="180">'.$oku["not_id"].'</td>';
					echo '<td width="180">'.$oku["tarih"].'</td>';
					echo '<td width="180">'.$oku["not_baslik"].'</td>';
					echo '<td width="180">'.$oku["not_icerik"].'</td>';
					echo '<td width="180"><a href="guncelle.php?ID='.$oku["not_id"].'">Güncelle</td>';
					echo '<td width="180"><a href="notsil.php?ID='.$oku["not_id"].'">Sil</td>';
				echo '</tr>';
			echo '</table>';	
		}
	}
	else{
		$hata="<script>alert('Aranan not bulunamadı')</script>";
		echo $hata;
		header("Refresh:0.1; url=notara.html");
	}
}

?>