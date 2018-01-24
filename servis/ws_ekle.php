<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Content-Type: text/html; charset=utf-8'); 
//Veritabanımıza bağlanıyoruz..
$baglan=mysqli_connect("localhost","root","","notekle"); 
mysqli_set_charset($baglan, "utf8");
//RESTful Web servisinde varolan dataları çekiyoruz..
$json = file_get_contents('php://input');
$obj = json_decode($json);
//Android tarafındaki put methodunda verdiğimiz key değerlerini kullanarak , çektiğimiz değerleri veritabanına data eklemek için kullanıyoruz..
$sqlInser = "INSERT INTO tbl_notekle (tarih,not_baslik, not_icerik) VALUES ('".$obj->{'tarih'}."','".$obj->{'baslik'}."','".$obj->{'not'}."')";
mysqli_query($baglan,$sqlInser);
$baglan->close();	
}

?>