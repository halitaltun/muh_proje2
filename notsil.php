<?php
$ID=$_GET["ID"];

$baglan=mysqli_connect("localhost","root","","notekle"); 
mysqli_set_charset($baglan, "utf8");
$sql="DELETE FROM tbl_notekle WHERE not_id='$ID'";
$sonuc=mysqli_query($baglan,$sql);

if($sonuc){
	$mesaj="<script>alert('Notunuz silindi')</script>";
	echo $mesaj;
	header("Refresh:0.1; url=notlistele.php");	
}
else{
	$hata="<script>alert('Notunuz silinemedi')</script>";
	echo $hata;
	header("Refresh:0.1; url=notlistele.php");	
}
?>