<meta charset="utf-8">
<?php
include("../config.php");
$t_query = mysql_query("SELECT * FROM fator") or die (mysql_error());
$t_query2 = mysql_query("SELECT * FROM fator") or die (mysql_error());
$money = 0;
while( $rows = mysql_fetch_array($t_query) ){
$money = $money + $rows["money"];
}
echo "المجموع : ";
echo $money;
echo "<hr>";
while( $rows2 = mysql_fetch_array($t_query2) ){
echo "<hr>";
echo "ID : ";
echo $rows2["id"];
echo "<br>";
echo "Email : ";
echo $rows2["email"];
echo "<br>";
echo "pay By : ";
echo $rows2["pay"];
echo "<br>";
echo "server : ";
echo $rows2["server"];
echo "<br>";
echo "check code : ";
echo $rows2["check"];
echo "<br>";
echo "Money : ";
echo $rows2["money"];
echo "<hr>";
}
?>