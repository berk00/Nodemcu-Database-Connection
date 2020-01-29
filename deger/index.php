<?php

$baglan=mysqli_connect("127.0.0.1","root","");
mysqli_set_charset($baglan,"utf8");


$db=mysqli_select_db($baglan,"igsfuatt_deger");
 



$sicaklik=0;
//$nem = $_GET['n']; // n değeri arduinonun gönderdiği değişken adı
if (isset($_GET['temperatureC'])) {
  $sicaklik = $_GET['temperatureC'];
}




//$db = new PDO("mysql:host=localhost;dbname=epiz_24934505_deger", "epiz_24934505", "5aHU06bJgjwX95Q");
/* Burada yildizları ve içerisini veritabanı adı,kullaniciadi,sifre ile değiştiriyoruz yildizlarida siliyoruz dbname="deneme" gibi */
if($db)
{
	echo("baglanti basarili");
}
else
	echo("baglanti basarisiz");

$now = new DateTime();
$datenow = $now->format("Y-m-d H:i:s"); //tarih saati yazdiriyoruz

$id="1";

$ekle=mysqli_query($baglan,"update tablo set tarih='$datenow',sicaklik='$sicaklik' where id='$id'");
if ($ekle>0) {
  echo"İşlem Tamamlandı";
}
else {
  echo"hata";
}
?>
