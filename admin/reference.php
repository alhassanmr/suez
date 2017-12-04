		<?php 
			session_start();
			$role = $_SESSION['sess_userrole'];
			if(!isset($_SESSION['sess_userrole'])  || $role!="Administrator"){
			header('Location: index.php?err=2');
			}
		?>

		<!DOCTYPE html>
		<html lang='en-us'>
		<head>

			<title>Dashboard</title>

			<meta charset='utf-8'>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		   
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/font-awesome.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<script type="text/javascript" src="js/script.js"></script>	
   
		</head>
	<body>
		
		

		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='#'>DASHBOARD</a></li>
				
				<li style="float:right;"><a href='../index.php'>LOGOUT</a></li>
				<li style="float:right;"><a href='#'><?php echo date('D d-M-Y'); echo '&nbsp;&nbsp;'; echo date('h:ia') ?></a></li>
				<li style="float:right;"><a href='#'><?php echo $_SESSION['sess_firstname']; echo '&nbsp;&nbsp;'; echo $_SESSION['sess_lastname']; ?></a></li>
				<li style="float:right;"><a href='#'>WELCOME <?php echo $_SESSION['sess_userrole']; ?></a></li>
			</ul>
		</div>
		
		<div class="sidebar-nav">
			<ul class="nav nav-list">
				<li class="actbive"><a href="#"><i class="fa-dashboard"></i>Dashboard </a></li>     
				<br><br><br><br><br><br><br>
				<li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a></li>
				<li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a></li>
				<li><a href="supplier.php"><i class="icon-group icon-2x"></i> Suppliers</a></li>
				<li><a href="salesreport.php"></i> Sales Report</a></li>
				<li><a href="sales_inventory.php"></i> Overall Sales</a></li>
			</ul>                               
		</div>
		
	</body>
<html>
