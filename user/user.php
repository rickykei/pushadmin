<?php
 require_once('./Connections/rmAction.php');  
 require_once('./include/functions.php');  
 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}



if ((isset($_REQUEST["MM_insert"])) && ($_REQUEST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO user ( id, username, password,role) VALUES (%s, %s, %s,%s)",
                       
					  
					   GetSQLValueString("", "text"),
                       GetSQLValueString($_REQUEST['username'], "text"),
					   GetSQLValueString($_REQUEST['password'], "text"),
                       GetSQLValueString($_REQUEST['roleid'], "text")
					 
                 
					 );
					   
					  

  mysql_select_db($database_rmAction, $rmAction);
  $Result1 = mysql_query($insertSQL, $rmAction) or die(mysql_error());
	if ($Result1!=""){
		$text="Submitted";
	}
}

 mysql_select_db($database_rmAction, $rmAction);
$query_Action = "SELECT role_id, name FROM `role` ";
$roleAction = mysql_query($query_Action, $rmAction) or die(mysql_error());
;

?> 
 <center>   <div class="input-group">
  
	    <table  border="0" cellpadding="4" cellspacing="0" width="400">
		
	 <tbody>
	<tr>
		<td align="left" bgcolor="#ffffff"><form class="form-inline"  action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
            <table align="center">
              <tr valign="baseline">
                <td nowrap="nowrap" align="right"><label for="username">User Name:</label></td>
                <td> <div class="form-group mb-2"><input class="form-control" type="text" id="username" name="username" value="" size="30" /></div></td>
              </tr>
			  
			  <tr valign="baseline">
                <td nowrap="nowrap" align="right"><label for="password">Password :</label></td>
                <td>
				<div class="form-group mb-2">
				<input class="form-control"  type="text" class="form-control"  name="password" id="password" value="" size="30" /></td>
				</div>
              </tr>
			  
              <tr valign="baseline">
                <td align="right"><label for="roleid">Role:</label></td>
                <td><div class="form-group mb-2"><select class="form-control" name="roleid" id="roleid">
				   <?php while($clientAction = mysql_fetch_assoc($roleAction)){
					   ?><option value="<?php echo $clientAction['role_id'];?>"><?php echo $clientAction['name'] ;?></option>
					   <?php
				   }
				   ?> 
				</select></div></td>
              </tr>
			 
             
              <tr valign="baseline">
                <td nowrap="nowrap" align="right"></td>
                <td><div class="form-group mb-2"><input name="" type="submit" tabindex="0" value="Insert record"  class="btn btn-primary"/></div></td>
              </tr>
            </table>
            <input type="hidden" name="MM_insert" value="form1" />
			<?php echo $text;?>
          </form>    
             
             <p>&nbsp;</p></td>
	</tr>
	</tbody></table> 
  