<?php
include "header.php";
?>

<?
$gcode = $_GET ['code'];
$query3 = mysql_query("select * from url where code='$gcode'");
$num = @mysql_num_rows($query3);
if(!$gcode or $num == 0){
        header("location: index.php");
}elseif($num == 0){
    header("location: index.php");
}else{
    $query4 = mysql_query("update url guest=guest+1 where code='$gcode'");
    $raw = mysql_fetch_assoc($query3);
    $guest = $raw['guest'];
    $time = $raw ['time'];
    $time2 = date("d-m-Y",$time);
    $url_short = $raw['url_short'];
header("location:$url_short");}
  ?>

<?php

include "footer.php";{

}

?>