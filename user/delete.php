<?php
 require_once('./Connections/rmAction.php');  
 require_once('./include/functions.php');  
 

if ((isset($_REQUEST['id'])) && ($_REQUEST['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM user WHERE id=%s",
                       GetSQLValueString($_REQUEST['id'], "int"));

 			   
  mysql_select_db($database_rmAction, $rmAction);
  $Result1 = mysql_query($deleteSQL, $rmAction) or die(mysql_error());

  $deleteGoTo = "/user/list_user.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
?><script> window.location.replace("/?page=user&action=list_user.php");</script><?php
}
?>