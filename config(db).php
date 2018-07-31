<?php

$host = "localhost";
$pass = "root";
$user = "root";
$db = "link";
mysql_connect($host,$user,$pass) or die ("mysql err");
mysql_select_db($db) or die ("mysql err");

?>
