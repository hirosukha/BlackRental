<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_blackrental";
$connect = mysql_connect($host,$user,$pass) or die ('Gagal connect db coy');
mysql_select_db($db);
?>