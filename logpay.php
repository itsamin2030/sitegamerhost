<?php
$email = $_GET["email"];
$pay = $_GET["pay"];
$server = $_GET["server"];
$txt = $_POST["txt"];
echo "Email : ";
echo $email;
echo "<br>";
echo "pay By : ";
echo $pay;
echo "<br>";
echo "server : ";
echo $server;
echo "<br>";
include("../config.php");
$insert = mysql_query("INSERT INTO servers (`id` , `email`, `pay` , `server` , `check`) VALUES ('' , '$email' , '$pay' , '$server' , '$txt' )");
?>