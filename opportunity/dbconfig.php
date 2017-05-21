<?php
$dbhost = "localhost";
$dbuser = "nullatec_forms";
$dbpass = "3Rnullatech";
$dbname = "nullatec_forms";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>