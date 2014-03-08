<!DOCTYPE html>

<html>

<head>
  <title>أستضافة جامر هوست</title>
  <link rel="stylesheet" href="template/css/bs.css" type="text/css" />
  <link rel="stylesheet" href="template/css/style.css" type="text/css" />
  <script src="template/js/bootstrap.min.js"></script>
  <script src="template/js/holder.js"></script>
  <script src="template/js/blue.js"></script>
  <meta charset="utf-8">
</head>

<body>

<div class="tophead">
<div class="row">
  <div class="col-md-3 col-md-offset-3">
    <h1 class="etitle pull-right"><font color="#FF0000">Gamer<span style="color: #F60">Host</span></font></h1></div>
  <div class="col-md-3 col-md-offset-3"><a class="glyphicon glyphicon-envelope btn-lg pull-left" href="mailto:amoni1432@gmail.com"></a></div>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
<?php
include("../config.php");
$t_query = mysql_query("SELECT * FROM servers") or die (mysql_error());
while( $rows = mysql_fetch_array($t_query) ){
echo "<hr>";
echo "ID : ";
echo $rows["id"];
echo "<br>";
echo "Email : ";
echo $rows["email"];
echo "<br>";
echo "pay By : ";
echo $rows["pay"];
echo "<br>";
echo "server : ";
echo $rows["server"];
echo "<br>";
echo "check code : ";
echo $rows["check"];
echo "<br>";
echo "<a href=\"del.php?del=";
echo $rows["id"];
echo "\">del</a>";
echo "<hr>";
}
?>