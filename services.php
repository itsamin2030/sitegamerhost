<!DOCTYPE html>

<html>

<head>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1tMadLgwaqXei7f8AarpgnCcueE1EvIO';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
  <title>أستضافة جامر هوست</title>
  <link rel="stylesheet" href="template/css/bs.css" type="text/css" />
  <link rel="stylesheet" href="template/css/style.css" type="text/css" />
  <script src="template/js/bootstrap.min.js"></script>
  <script src="template/js/holder.js"></script>
  <script src="template/js/blue.js"></script>
  <meta charset="windows-1256">
</head>

<body>

<div class="tophead">
<div class="row">
  <div class="col-md-3 col-md-offset-3">
    <h1 class="etitle pull-right"><font color="#FF0000">Gamer<span style="color: #F60">Hos</span></font><span style="color: #F60">t</span></h1></div>
  <div class="col-md-3 col-md-offset-3"><a class="glyphicon glyphicon-envelope btn-lg pull-left" href="mailto:amoni1432@gmail.com"></a></div>
</div>
</div>
<center>
<?php
echo "<br>";
echo "الخدمات";
include("../config.php");
$t_query = mysql_query("SELECT * FROM services") or die (mysql_error());
while( $rows = mysql_fetch_array($t_query) ){
if ( $rows["run"] == 1 ) {
echo "<hr>";
echo "ID : ";
echo $rows["id"];
echo "<br>";
echo "Name : ";
echo $rows["name"];
echo "<br>";
echo "Des : ";
echo $rows["des"];
echo "<br>";
echo "Cost : ";
echo $rows["cost"];
echo "<br>";
echo "<a href=\"";
echo $rows["page"];
echo "\">Buy</a>";
echo "<br>";
echo "<hr>";
}
}
?>


</center>
</body>
</html>