<?php
session_start();
 global $UNAME;
 global $UROLE;
 define("ADMIN_ROLE", 1); 
  
 include_once('./include/db.class.php');
 include_once('./include/function.php');
 include_once('./include/config.php');
 include_once('./include/user.class.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<?php
 $User = new User($db);
 if ($_SESSION['username']==''){
 $uname=$_REQUEST['username'];
 $pass=$_REQUEST['password'];
 }else{
	$UNAME=$_SESSION['username'];
	$UROLE=$_SESSION['userrole'];
 }
	  	 
	//echo "UNAME_SESSION".$_SESSION['username'];
	 //echo "UROLE_SESSION".$_SESSION['userrole'];
	 
	 
if ($_SESSION['username']=="" && $uname!="" && $User->checkPassword($uname,$pass)){
    $_SESSION['username']=$User->getUsername();
	$_SESSION['userrole']=$User->getUserrole(0);
	$UNAME=$_SESSION['username'];
	$UROLE=$_SESSION['userrole'];
	?><body style="margin-top:  0px;margin-left:  0px;"><?php 	  
}else if ($_SESSION['username']=="" && $UNAME!="" && $User->checkPassword($UNAME,$pass)==false){
	 ?> <script>
 alert('Incorrect Username / Password');
 window.location.href = "index.php";
 </script>
 <?php } else if ($_SESSION['username']=="" && $UNAME=="") { 

include_once("header_empty.php");?>
<script>
$(document).ready(function(){
	$("#username").focus();
});
</script>
<div class="container">
<div class="row" style="margin-top:60px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    	<form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<fieldset>
				<h2>Please Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="name" name="username" id="username" class="form-control input-lg" placeholder="Login Name">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				 
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                     
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						   <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
</div>  
 
<?php }


 if($UNAME!='' & $UROLE!='') {
	include_once("header.php");	 
	?>
	
<div class="container">
<div class="row" style="margin-top:60px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	

	</div>
</div>
</div>  <?php
	
	if($_REQUEST['page']!='' && $_REQUEST['action']!=''){
		include_once('./'.$_REQUEST['page'].'/'.$_REQUEST['action']);
	}

	
} else{
	include_once("header_empty.php");	 
}
  
  
?>
</div>
</body>
</html> 
 
 
 
 
