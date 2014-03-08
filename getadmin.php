<meta charset="utf-8">
<?php
	$cookie = setcookie("admin" , true );
	if ( $cookie ){
		echo "لقد حصلت على صلاحية الدخول";
	}
?>