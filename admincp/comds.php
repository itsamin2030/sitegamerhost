<?php
include("../config.php");
$t_query = mysql_query("SELECT * FROM comds") or die (mysql_error());
?>
 <?php
								while( $rows = mysql_fetch_array($t_query) ){
?>
<hr>
<input type="text" value="<?php echo $rows['username']; ?>">
<br>
<textarea>
<?php  echo $rows['msg'];  ?>
</textarea>
<hr>
<?php
}
								?>