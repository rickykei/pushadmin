<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_rmAdmin = "localhost";
$database_rmAdmin = "keleo";
$username_rmAdmin = "keleo";
$password_rmAdmin = "keleo2017";
$rmAdmin = mysqli_connect($hostname_rmAdmin, $username_rmAdmin, $password_rmAdmin) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
