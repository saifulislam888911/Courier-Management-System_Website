<?php

	session_start();

	if(!isset($_SESSION["LoginUser"]))
	{
		
	}

 ?>



<html>

	<head>
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
		
	</head>
	
	<body>
		<div class="text-center">
		
			<h1 class="header"><i> RECEPTIONIST-PANEL </i></h1>
			
		</div>
		
		
		
				<!--menu starts-->
		
		
		<div class="text-center">
		
			<a href="receptionist_dashboard.php" class="btn btn-primary">Dashboard</a>
			
			<!--<a href="receptionist_AllEmployeeInfo.php" class="btn btn-info">All EMPLOYEE Information</a>
			<a href="receptionist_AddEmployee.php" class="btn btn-success">Add EMPLOYEE</a>-->
			
			<a href="receptionist_AllCustomerInfo.php" class="btn btn-info">All CUSTOMER Information</a>
			<a href="receptionist_AddCustomer.php" class="btn btn-success">Add CUSTOMER</a>
			
			<a href="receptionist_AllProductAndServiceInfo.php" class="btn btn-info">All Courier Product & Service Information</a>
			<!--<a href="admin_AddProductAndService.php" class="btn btn-success">Add Product & Service List</a>-->
			
			<a href="receptionist_CourierService.php" class="btn btn-warning">Add Courier Service & Product</a>
			
			<a href="login.php" class="btn btn-danger">Logout</a>	
			
		</div>
		
<br/>
<br/>
<br/>
<br/>
<br/>



				<!--menu ends-->


