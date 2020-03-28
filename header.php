<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!---<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> //-->
<script src="/js/moment.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
<!---<script src="/js/jquery.dataTables.min.js"></script>//-->
<script src="/js/jquery.dataTables.yadcf.js"></script>
<script src="/js/view.js"></script>
<script src="/js/autoNumeric.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/zh-hk.js"></script>	 
	 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">//-->
<link rel="stylesheet" href="/js/jquery-ui-1.11.4.custom/jquery-ui.min.css">
<link rel="stylesheet" href="/js/jqueryyadcf.css" >
<link rel="stylesheet" href="/css/styles_new.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" media="all" rel="stylesheet" type="text/css" />


 </head>

 

<body>
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img height="30" src="/assets/logo.jpg" border="0"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        <li class=" dropdown">
                            <a href="/?page=pet&action=list_lost.php" role="button" aria-expanded="false">Lost Pet </a>
                            <ul class="dropdown-menu">
								<li><a href="/?page=pet&action=list_lost.php">lost pet</a></li>
							 	<li><a href="/?page=pet&action=list_adoption.php">adoption pet</a></li>
							 	<li><a href="/?page=pet&action=list_found.php">lost pet is found </a></li>
                            </ul>
                        </li>
                     
                        
                    </ul>
					 <ul class="nav navbar-nav">
                        
                        <li class=" dropdown">
                            <a href="/?page=pet&action=list_adoption.php" role="button" aria-expanded="false">adoption Pet  </a>
                            <ul class="dropdown-menu">
								<li><a href="/?page=pet&action=list_lost.php">lost pet</a></li>
							 	<li><a href="/?page=pet&action=list_adoption.php">adoption pet</a></li>
							 	<li><a href="/?page=pet&action=list_found.php">lost pet is found </a></li>
                            </ul>
                        </li>
                     
                        
                    </ul>
					 <ul class="nav navbar-nav">
                        
                        <li class=" dropdown">
                            <a href="/?page=pet&action=list_found.php" role="button"  aria-expanded="false">lost pet is found </a>
                            <ul class="dropdown-menu">
								<li><a href="/?page=pet&action=list_lost.php">lost pet</a></li>
							 	<li><a href="/?page=pet&action=list_adoption.php">adoption pet</a></li>
							 	<li><a href="/?page=pet&action=list_found.php">lost pet is found </a></li>
                            </ul>
                        </li>
                     
                        
                    </ul>
					 <ul class="nav navbar-nav">
                        
                        <li class=" dropdown">
                            <a href="/?page=pet&action=list_filter_content.php" role="button"  aria-expanded="false">list_filter_content</a>
                            <ul class="dropdown-menu">
								<li><a href="/?page=pet&action=list_lost.php">lost pet</a></li>
							 	<li><a href="/?page=pet&action=list_adoption.php">adoption pet</a></li>
							 	<li><a href="/?page=pet&action=list_found.php">lost pet is found </a></li>
                            </ul>
                        </li>
                     
                        
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as <?php echo $UNAME;?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/?page=user&action=chg_pw.php">Change Password</a></li>
                                <li><a href="#">My Profile </a></li>
								<?php if ($UROLE=='admin'){?><li><a href="/?page=user&action=list_user.php">User Management </a></li><?php }?>
                            </ul>
                        </li>
                        <li class=""><a href="/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
 
 
  <div class="container">
 
 
