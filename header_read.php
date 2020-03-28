<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/moment.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
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
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/js/jquery-ui-1.11.4.custom/jquery-ui.min.css">
<link rel="stylesheet" href="/js/jquery.datatables.yadcf.css"  type="text/css" />
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
                    <a class="navbar-brand" href="/index.php"><img height="30" src="/assets/header.jpg" border="0"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Purchase <span class="caret"></span></a>
                            <ul class="dropdown-menu">
								
								<li><a href="/purchase/list_purchase.php">View Purchase</a></li>
                                
								<li><a href="/stone/list_stone.php">View Stone</a></li>
                                
								<li><a href="/jewelry/list_jewelry.php">View Jewelry</a></li>
								
								
                            </ul>
                        </li>
                     
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consign / Sales <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                     
								<li><a href="/consignment/list_consignment.php">viewconsignment</a></li>
                     
								<li><a href="/sale/list_sale.php">viewsale</a></li>
								 
                               
                            </ul>
                        </li>
                        <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Client <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/client/list_client.php">Client Search,</a></li>
                     
                            </ul>
                        </li>
						<li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Supplier <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/supplier/list_supplier.php">Supplier Search,</a></li>
                                
                            </ul>
                        </li>
						<li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Reports <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Receivables,</a></li>
                                <li><a href="#">Payables,</a></li>
								<li><a href="#">Sales,,</a></li>
					
								<li><a href="#">Month-End Inventory List (by Product – Stone, Jewelry),</a></li>
							 
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">My Profile</a></li>
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
 <div class="row" style="margin-top:60px">