<?php

$email = $_POST["email"];
$sifre = $_POST["sifre"];

$baglan=mysqli_connect("localhost","root","","kayit"); 
mysqli_set_charset($baglan, "utf8");


if($email=="" || $sifre==""){
	$hata="<script>alert('Boş alan bırakmayınız')</script>";
	echo $hata;
	header("Refresh:0.1; url=giris.html");
}
else{
	$sqloku="SELECT * FROM tbl_kayit WHERE email='$email' and  parola='$sifre'";
	$kontrol=mysqli_query($baglan,$sqloku);
	if(mysqli_num_rows($kontrol)>0){
		$_SESSION["email"]=$email;
		@header("location:anasayfa.html");
	}
	else{
		$hata="<script>alert('email veye şifre hatalı')</script>";
		echo $hata;
		header("Refresh:0.1; url=giris.html");
	}
}

?>