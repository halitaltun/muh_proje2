<?php
// veri tabanından hangi kolonları çekecek burada belirliyoruz.
class veriler {
public $not_id = "";
public $tarih = "";
public $not_baslik = "";
public $not_icerik = "";
function __construct($not_id, $tarih, $not_baslik, $not_icerik) {
$this->not_id = $not_id;
$this->tarih = $tarih;
$this->not_baslik = $not_baslik;
$this->not_icerik = $not_icerik;
}
}
class verileriFormatla{
public function format_JSON(){
$conn = new mysqli("localhost", "root", "", "notekle");

$conn->set_charset("utf8");
if($conn->connect_error)
{
echo "Veri tabanı bağlantı hatası : " . $conn->$connect_error;
}
$query = "SELECT * FROM tbl_notekle";
$kullanici_array = array();
if($result = $conn->query($query)){
while ($nesne = $result->fetch_object()){
$gecici_kullanici = new veriler($nesne->not_id, $nesne->tarih, $nesne->not_baslik, $nesne->not_icerik);
$kullanici_array[] = $gecici_kullanici;
}
foreach ($kullanici_array as $value) {
$kullanici_bilgisi = json_encode($value);
echo $kullanici_bilgisi;
echo '<br />';
}
$result->close();
$conn->close();
}
}
}
$ekranabas = new verileriFormatla();
echo "JSON FORMATINDAKI VERILER";
echo "<br /><hr></hr>";
$ekranabas->format_JSON();
?>