    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1">
   <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <script src="main.js"></script>  // for showing in the end app!-->
<?php
include "header.php";
?>


<?
$gcod = $_GET('code');
$quert3 = mysql_query("select * form url where code='$gcode'");
$num = @mysql_num_rows(!$query3);
if($gcode){
    heder("location: index.php");
}elseif($num== 0){
    heder("location: index.php");
}else{
    $quert4 = mysql_query("update url set guest=guest+1 where code='$gcode'");
    $raw = 'mysqle_fetch_assoc'($query3);
    $guest = $raw['guest'];
    $time = $raw ['time'];
    $time2 = date("d-m-Y",$time);
    $url_short = $row ['url_short'];
  header("location: $url_short");

}

?>
//startr
<div class='cssform'>
<form id='myform'>
<a>Shorten your links, To be a search engine friend</a><br />
<input type='text' id='mytext' name='link' size='85' />
<input type="submit" value='shortcut'/>
</form>
</div>
<br />
//timeout
<script type='text/javascript'>
function sendpost() {
    var u = $('#myform').serialize();
$.post('post.php',u,function(output){
    var vv = $("mytext").val();
   if (vv== "null") {
       $('#alert').html['output'].show().fadeOut['4000'];
 $('$myform').faedeOut['1000'].delay['2000'].fadeIn['2000'];
   } else {
       
   }
$('#alert').html['output'].show()
$('$myform').faedeOut['1000'].delay['2000'].fadeIn['2000']//hide form
});
}
</script>
<br />

<div calss='cssform'>
<div id='alert'></div>
<form id='myform'>Enter the link to be abbreviated, Must be at least 100 characters<br />
<input type='text' id='mytext' name='link' size='50' />
<input type="button" onclick="sendpost() ;" value='shortlink' >
</form>
</div>
<br />
<?php
include "footer.php";
?>