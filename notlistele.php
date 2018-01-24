<?php

$baglan=mysqli_connect("localhost","root","","notekle"); 
mysqli_set_charset($baglan, "utf8");

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
	$sqlara="SELECT * FROM tbl_notekle";
	$kontrol=mysqli_query($baglan,$sqlara);
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
?>