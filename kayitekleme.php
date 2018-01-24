<?php

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$email = $_POST["email"];
$sifre = $_POST["sifre"];

$baglan=mysqli_connect("localhost","root","","kayit"); 
mysqli_set_charset($baglan, "utf8");

$sqlkontrol="SELECT * FROM tbl_kayit WHERE email='$email'";
$kontrol=mysqli_query($baglan,$sqlkontrol);
if(mysqli_num_rows($kontrol)>0){
	$hata="<script>alert('Bu email kullanılmaktadır')</script>";
	echo $hata;
	header("Refresh:0.1; url=sayfagiris.html");		
}
else{
	if($ad=="" || $soyad=="" || $email=="" || $sifre==""){
		$hata="<script>alert('Boş alan bırakmayınız')</script>";
		echo $hata;
		header("Refresh:0.1; url=sayfagiris.html");
	}
	else{
		$sqlekle="INSERT INTO tbl_kayit (ad,soyad,email,parola) VALUES ('$ad','$soyad','$email','$sifre')";
		$sonuc=mysqli_query($baglan,$sqlekle);	 
		if ($sonuc==0){
			$hata="<script>alert('Kaydınız yapılamadı!')</script>";
			echo $hata;
		}
		else{
			header("Refresh:0.1; url=anasayfa.html");
		}
	}
}
?>