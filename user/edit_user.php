<?php
 require_once('./Connections/rmAction.php');  
 require_once('./include/functions.php');  
 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$id=$_REQUEST["id"];

if ((isset($_REQUEST["MM_update"])) && ($_REQUEST["MM_update"] == "form1")) {
  $insertSQL = sprintf("update user set password=%s , role =%s where id=$id",
                        
                       GetSQLValueString($_REQUEST['password'], "text"),
					   GetSQLValueString($_REQUEST['roleid'], "text")
					   
                   
					);
					   
					  

  mysql_select_db($database_rmAction, $rmAction);
  $Result1 = mysql_query($insertSQL, $rmAction) or die(mysql_error());
	if ($Result1!=""){
		$text="Updated";
	}
}

 //view client form
if (isset($_REQUEST["button"])){
	mysql_select_db($database_rmAction, $rmAction);
	$query_rsSupplier = "SELECT user.id as id,username as username , role.name as role,user.role as role_id, user.password as password  FROM user ,role where user.role=role.role_id and id='".$_GET["id"]."'  ";
 
	$rsSupplier = mysql_query($query_rsSupplier, $rmAction) or die(mysql_error());
	$row_rsSupplier = mysql_fetch_assoc($rsSupplier);
}

 mysql_select_db($database_rmAction, $rmAction);
$query_Action = "SELECT role_id, name FROM `role` ";
$roleAction = mysql_query($query_Action, $rmAction) or die(mysql_error());
;

?> 
 <center>
   <div class="input-group">
<table border="0" cellpadding="0" cellspacing="0" width="560">
  <tbody><tr>
    <td bgcolor="#FFFFFF" valign="top" width="560"><center>
	<form class="form-inline" action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
	<div class="form-group">
	    <table align="center">
              <tr valign="baseline">
             <td nowrap="nowrap" align="right"><label for="username">User Name:</label></td>
                <td><div class="form-group mb-2">
				<input type="text" class="form-control" id="username" name="username" value="<?php echo $row_rsSupplier['username'];?>" size="30" />
				</div>
				</td>
              </tr>
			  <tr valign="baseline">
                <td nowrap="nowrap" align="right"><label for="password">Password:</label></td>
                <td>
				<div class="form-group mb-2">
				<input type="password" class="form-control" id="password" name="password" value="<?php echo $row_rsSupplier['password'];?>" size="30" />
				</div>
				</td>
              </tr>
              <tr valign="baseline">
                <td nowrap="nowrap" align="right"><label for="roleid">Role:</label></td>
                <td>
				<div class="form-group mb-2">
				<select name="roleid" class="form-control" id="roleid">
				   <?php while($clientAction = mysql_fetch_assoc($roleAction)){
					   ?><option value="<?php echo $clientAction['role_id'];?>" <?php if ($row_rsSupplier['role_id']==$clientAction['role_id']){echo "selected";}?>><?php echo $clientAction['name'] ;?></option>
					   <?php
				   }
				   ?>
				 
				
				</select>
				</div></td>
              </tr>
			 
              <tr valign="baseline">
                <td nowrap="nowrap" align="right"></td>
                
                <td><input name="" type="submit" tabindex="0" value="Update record"  class="btn btn-primary"/></td>
              </tr>
            </table>
            <input type="hidden" name="MM_update" value="form1" />
			<?php echo $text;?>
			</div>
          </form>    
             
             <p>&nbsp;</p></td>
	</tr>
	</tbody></table>
	</div>
	 </center>	  </td>
  </tr>
</tbody></table>
 
 