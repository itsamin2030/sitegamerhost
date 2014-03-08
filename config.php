<?php
mysql_connect ("localhost","root","") or die ("خطأ في الإتصال بالقاعدة".mysql_error() );  
mysql_set_charset('utf8');  
mysql_select_db ("mydb") or die ("خطأ في في أختيار القاعدة".mysql_error() );
?>