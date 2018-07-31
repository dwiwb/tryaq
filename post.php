<?php 
/* 
CREATE TABLE 'URL' (
    'id' INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    'url_short' VARCHAR ( 1000 ) NOT NULL ,
    'code'  VARCHAR ( 10 ) NOT NULL ,
    'time'  VARCHAR ( 50 ) NOT NULL ,
    'ip' VARCHAR ( 50 ) NOT NULL ,
    "guset' VARCHAR ( 50 ) NOT NULL ,
    ) ENGINE = MYISAM;
 */
require "code.php";
require "db.php";
$code = $class_code->mycode();
$time = time();
$ip = $_SERVER ['REMOTE_ADDR'];
$postname = $_POST ['link'];
if (!$postname or $postname == '') {
echo "<div class='no'>Please enter the link to be abbreviated</div>";
}
else{
$query = mysql_query("insert into url (url_short,code,time,ip.guest) 

values('$postname','$code','$time','$ip','$guest')");
if($query){
echo "<div class='OK'>Link successfully shortened<br />
<input size='30' type='text' value='http://localhost/link/$code' /> </div>";
    }
}
?>