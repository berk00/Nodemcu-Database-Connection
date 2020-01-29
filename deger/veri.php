<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Anlık Veri Çekme</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
        $("#result").load("veriler.php");
});

setInterval(function(){$("#result").load('veriler.php');}, 1000);
</script>
</head>
<body>
<div id="result"></div>
</body>
</html>