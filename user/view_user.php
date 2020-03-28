<?php
 require_once('./Connections/rmAction.php');  
 require_once('./include/functions.php');  
 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


 //view client form
if (isset($_REQUEST["button"])){
	mysql_select_db($database_rmAction, $rmAction);
	$query_rsSupplier = "SELECT * FROM supplier where id='".$_GET["id"]."'  ";
 
	$rsSupplier = mysql_query($query_rsSupplier, $rmAction) or die(mysql_error());
	$row_rsSupplier = mysql_fetch_assoc($rsSupplier);
}

 

?> 

 <center>  <table   border="0" cellpadding="4" cellspacing="0" width="400">
    <td bgcolor="#FFFFFF" valign="top" width="560"><center>
	   <table align="center">
              <tr valign="baseline">
                <td nowrap="nowrap" align="right">Short Name:</td>
                <td><?php echo $row_rsSupplier['short_name'];?></td>
              </tr>
			  <tr valign="baseline">
                <td nowrap="nowrap" align="right">Full Name:</td>
                <td><?php echo $row_rsSupplier['full_name'];?></td>
              </tr>
              <tr valign="baseline">
                <td nowrap="nowrap" align="right">Type:</td>
                <td> <?php if ($row_rsSupplier['type']=='D') { echo "Diamond";}?> 
				<?php if ($row_rsSupplier['type']=='C') { echo "Colorstone";}?>
				<?php if ($row_rsSupplier['type']=='P') { echo "Pearls";}?>
				<?php if ($row_rsSupplier['type']=='L') { echo "Labour";}?>
				<?php if ($row_rsSupplier['type']=='G') { echo "Gold";}?>
				<?php if ($row_rsSupplier['type']=='J') { echo "Jewelry";}?>
				<?php if ($row_rsSupplier['type']=='O') { echo "Others";}?>
				 </td>
              </tr>
			  <tr valign="baseline">
                <td nowrap="nowrap" align="right">Office Phone:</td>
                <td> <?php echo $row_rsSupplier['office_phone'];?> </td>
              </tr>
              <tr valign="baseline">
                <td nowrap="nowrap" align="right">Address:</td>
                <td> <?php echo $row_rsSupplier['address'];?> </td>
              </tr>
			    <tr valign="baseline">
                <td nowrap="nowrap" align="right">Contact Person:</td>
                <td>  <?php echo $row_rsSupplier['contact_person'];?> </td>
              </tr>
              <tr valign="baseline">
                <td nowrap="nowrap" align="right">Mobile Phone:</td>
                <td> <?php echo $row_rsSupplier['mobile'];?> </td>
              </tr>
              <tr valign="baseline">
                <td nowrap="nowrap" align="right">Payment Terms (days):</td>
                <td> <?php echo $row_rsSupplier['payment_terms'];?> </td>
              </tr>
             
             
            </table>
         
             
             <p>&nbsp;</p></td>
	</tr>
	</tbody></table> 
 