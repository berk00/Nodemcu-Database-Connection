<html>
<head></head>
<body>



<?php



     $baglan=mysqli_connect("127.0.0.1","root","");
mysqli_set_charset($baglan,"utf8");
$db=mysqli_select_db($baglan,"igsfuatt_deger");
     
     $sth =mysqli_query($baglan,"SELECT * FROM tablo");
     $i=0;
while($stha = mysqli_fetch_array($sth))

  {

    $ad = $stha['sicaklik'];

	

	$i++;
	echo "<font  size='20px'>$ad<font/>";
	
    
  }

	

	





//$sth->execute();

//if ( $sth ){
//$result = $sth->fetchAll();


//}

?>

</body>
</html>