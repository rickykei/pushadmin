<?php
 require_once('./Connections/rmAction.php');  
 require_once('./include/functions.php');  
 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$id=$_REQUEST["id"];

if ((isset($_REQUEST["MM_update"])) && ($_REQUEST["MM_update"] == "form1")) {
  $insertSQL = sprintf("update user set password=%s where id=$id",
                        GetSQLValueString($_REQUEST['password'], "text"));
					   
  mysql_select_db($database_rmAction, $rmAction);
  $Result1 = mysql_query($insertSQL, $rmAction) or die(mysql_error());
	if ($Result1!=""){
		$text="Updated";
	}
}

 
	mysql_select_db($database_rmAction, $rmAction);
	$query_rsSupplier = "SELECT *  FROM user where username='".$UNAME."'  ";
 
	$rsSupplier = mysql_query($query_rsSupplier, $rmAction) or die(mysql_error());
	$row_rsSupplier = mysql_fetch_assoc($rsSupplier);
 

 

?> 
 <center>	<?php echo $text;?>
   <div class="input-group">
<table border="0" cellpadding="0" cellspacing="0" width="560">
  <tbody><tr>
    <td bgcolor="#FFFFFF" valign="top" width="560"><center>
	<form class="form-inline" action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
	<div class="form-group">
	    <table align="center">
               
			  <tr valign="baseline">
                <td nowrap="nowrap" align="right"><label for="password">New Password:</label></td>
                <td>
				<div class="form-group mb-2">
				<input type="password" class="form-control" id="password" name="password" value="<?php echo $row_rsSupplier['password'];?>" size="30" />
				</div>
				</td>
              </tr>
               
			 
              <tr valign="baseline">
                <td nowrap="nowrap" align="right"></td>
               <td><input name="" type="submit" tabindex="0" value="Update record"  class="btn btn-primary"/></td>
              </tr>
            </table>
			<input type="hidden" name="id" value="<?php echo $row_rsSupplier['id'];?>" />
            <input type="hidden" name="MM_update" value="form1" />
		
			</div>
          </form>    
             
             <p>&nbsp;</p></td>
	</tr>
	</tbody></table>
	</div>
	 </center>	  </td>
  </tr>
</tbody></table>
 
 