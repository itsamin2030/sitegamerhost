<?   session_start();   ?>
<meta charset="utf-8">
<?php
if ( isset($_SESSION['admin_session']) ) {
	 unset( $_SESSION['admin_session']);
	 session_destroy(); 
	 echo "<a href='index.php'>تم تسجيل الخروج لتسجيل الدخول مرة أخرى أضغط هنا</a>";
}else{
	echo "<a href='login.php'>يجب تسجيل الدخول لتسجيل الخروج أضغط هنا لتسجيل الدخول</a>";
}
?> 