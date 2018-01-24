<?php

$tarih = $_POST["tarih"];
$baslik = $_POST["baslik"];
$not = $_POST["not"];

$baglan=mysqli_connect("localhost","root","","notekle"); 
mysqli_set_charset($baglan, "utf8");


if($tarih=="" || $baslik=="" || $not==""){
	$hata="<script>alert('Boş alan bırakmayınız')</script>";
	echo $hata;
	header("Refresh:0.1; url=notekle.html");
}
else{
	$sqlekle="INSERT INTO tbl_notekle (tarih,not_baslik, not_icerik) VALUES ('$tarih','$baslik','$not')";
	$sonuc=mysqli_query($baglan,$sqlekle);	 
	if ($sonuc==0){
		$hata="<script>alert('Not eklenemedi, kontrol ediniz')</script>";
	echo $hata;
		header("Refresh:0.1; url=notekle.html");
	}
	else{
		$hata="<script>alert('Not başarıyla eklendi')</script>";
	echo $hata;
		header("Refresh:0.1; url=notekle.html");
	}
}

?>