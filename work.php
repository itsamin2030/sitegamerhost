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
$email = $_POST["email"];
$server = $_POST["server"];
$pay = $_POST["pay"];
if ( $server == "mta" ) {
echo "<br>لقد أخترت MTA و";
} elseif ( $server == "samp" ) {
echo "<br>لقد أخترت SA-MP و";
} elseif ( $server == "mine" ) {
echo "<br>لقد أخترت minecraft و";
}
echo "لقد تم الشراء من ";
echo $pay ;
echo "<br>";
?>
<?php 
if ( $pay != null or $server != null ){
echo '
</p>
<form id="form1" name="form1" action="logpay.php?email='; echo $email; echo '&pay='; echo $pay; echo '&server='; echo $server; echo ' " method="post">
  <label for="textfield">';
  if ( $pay == "paygol" ) { echo "أدخل رقم ( PIN )"; } if ( $pay == "cashu" ) { echo "أدخل رقم العملية"; } if ( $pay == "paypal" ) { echo "أدخل الإيميل المحول منه"; } echo '</label>
  <input type="text" name="txt" id="textfield">
  <input type="submit">
</form>';}
?>
</body>
</html>