<?php   session_start();   ?>
<meta charset="utf-8">
<?php

 if (isset($_SESSION['admin_session']) ) {
	 echo "<center><a href='admin.php'>لقد تم تسجيل دخولك بنجاح أضغط هنا</a></center>";
 echo "<meta http- equiv = refresh content=1;url=admin.php>";
 }else{
	include ('login.php'); 
 }
?>