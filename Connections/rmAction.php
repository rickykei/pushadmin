<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_rmAction = "localhost";
$database_rmAction = "keleo";
$username_rmAction = "root";
$password_rmAction = "";
$rmAction = mysqli_connect($hostname_rmAction, $username_rmAction, $password_rmAction) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
