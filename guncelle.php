<?php

$ID=$_GET["ID"];

$baglan=mysqli_connect("localhost","root","","notekle");
mysqli_set_charset($baglan, "utf8");

$sql="SELECT * FROM tbl_notekle WHERE not_id='$ID'";
$yaz=mysqli_query($baglan,$sql);
 while($oku=mysqli_fetch_array($yaz)){
	 $not_id=$oku["not_id"];
	 $tarih=$oku["tarih"];
	 $baslik=$oku["not_baslik"];
	 $not=$oku["not_icerik"];
	 
	 echo '<form  name="form1" action="guncelle2.php?ID='.$ID.'.php" method="post">
           		<h4>Not Tarihi</h4>
               	<p><label><input name="tarih" type="date" value="'.$tarih.'" ></label></p>
               	<input  name="baslik" type="text" id="textbaslik" value="'.$baslik.'">
               	<p>
               	<textarea name="not" id="textnot" rows="20" cols="35">'.$not.'</textarea>
               	<p>
               	<input type="submit" value="GÜNCELLE" class="Create-btn">
               	</p>       
           </form>';
 }
 
?>