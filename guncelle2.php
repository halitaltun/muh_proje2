<?php

$ID=$_GET["ID"];

$tarih = $_POST["tarih"];
$baslik = $_POST["baslik"];
$not = $_POST["not"];

$baglan=mysqli_connect("localhost","root","","notekle"); 
mysqli_set_charset($baglan, "utf8");
$sql="UPDATE tbl_notekle SET tarih='$tarih',not_baslik='$baslik', not_icerik='$not' WHERE not_id='$ID'";
$sonuc=mysqli_query($baglan,$sql);
if($sonuc){
	$mesaj="<script>alert('Notunuz güncellendi')</script>";
	echo $mesaj;
	header("Refresh:0.1; url=notara.html");	
}
else{
	$hata="<script>alert('Notunuz güncellenemedi')</script>";
	echo $hata;
	header("Refresh:0.1; url=notara.html");	
}

?>