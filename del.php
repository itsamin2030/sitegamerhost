<meta charset="utf-8">
<?php
include("../config.php");
$del = $_GET["del"];
$sql = mysql_query("SELECT * FROM servers WHERE id=$del");
$rows = mysql_fetch_array($sql);    
$id = $rows['id'];
$email = $rows['email'];
$pay = $rows['pay'];
$server = $rows['server'];
$check = $rows['check'];
$money = 10;
$insert = mysql_query("INSERT INTO fator (`id` , `email`, `pay` , `server` , `check` , `money`) VALUES ('$id' , '$email' , '$pay' , '$server' , '$check' , '$money' )");
$query = mysql_query("DELETE FROM servers WHERE id=$del");
?>
<a href="view.php">رجوع</a>