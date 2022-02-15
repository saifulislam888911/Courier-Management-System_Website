<?php

	require_once '../models/database.php';
	
	if(isset($_POST["add_Product"]))						
	{
		insertProduct();
	}
	else if(isset($_POST["edit_Product"]))					
	{
		edit_Product();
	}
	 
	
	function getAllProductInfo()							
	{
		$query ="SELECT * FROM product_information";
		
		$product_information = get($query);
		
		return $product_information;
		
	}
	
	function getProduct($product_id)						
	{
		
		$query="SELECT * FROM product_information WHERE product_id=$product_id";

		$product=get($query);
		
		return $product[0];
		
	}
	
	
	
	function deleteProduct($product_id)					
	{  
	
		$query="DELETE FROM product_information WHERE product_id=$product_id";
				
		$product=get($query);
			
		echo $query;
		
		execute($query);
			
		echo"
				<script>
				alert(' Data is Successfully  Deleted ');
				window.location.href='../views/admin_AllProductAndServiceInfo.php';
				</script>
				";
		
	}
	
	
	
	
	function insertProduct()								
	{	
	
		$owner_name=$_POST["owner_name"];
		$owner_address=$_POST["owner_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$delivery_address=$_POST["delivery_address"];
		$delivery_status=$_POST["delivery_status"];		
		$payment_status=$_POST["payment_status"];


	 
		$target_dir="../storage/owner_Image/";
		
        $target_file = $target_dir . basename($_FILES["employee_image"]["name"]);
		
        $uploadOk = 1;
		
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
        move_uploaded_file($_FILES["employee_image"]["tmp_name"], $target_file);
		


		
		$query="INSERT INTO product_information VALUES(NULL,'$owner_name','$owner_address','$email_address','$contact_no','$delivery_address','$delivery_status','$payment_status','$target_file')";
		
		execute($query);
		
		echo"
				<script>
				alert(' Data is Successfully  Added ');
				window.location.href='../views/admin_AllProductAndServiceInfo.php';
				</script>
				";
		
		
	}
	
	function edit_Product()									
	{
		
		$product_id=$_POST["product_id"];
		$owner_name=$_POST["owner_name"];
		$owner_address=$_POST["owner_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$delivery_address=$_POST["delivery_address"];
		$delivery_status=$_POST["delivery_status"];		
		$payment_status=$_POST["payment_status"];
		
		$target_file=$_POST["prev_image"];

		 
		//if(file_exists($_FILES['employee_image']['tmp_name']) || is_uploaded_file($_FILES['employee_image']['tmp_name'])) 
		{
		//	$target_dir="../storage/Employee_Image/";
			
		//	$target_file = $target_dir . basename($_FILES["employee_image"]["name"]);
			
		//	$uploadOk = 1;
			
		//	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
		//	move_uploaded_file($_FILES["employee_image"]["tmp_name"], $target_file);
			
		}
		

		
		$query="UPDATE product_information SET owner_name='$owner_name',owner_address='$owner_address',email_address='$email_address',contact_no='$contact_no',delivery_address='$delivery_address',delivery_status='$delivery_status',payment_status='$payment_status','$target_file' WHERE product_id=$product_id";


		echo $query;
		
		execute($query);
		
			echo"
				<script>
				alert(' Data is Successfully  Edited ');
				window.location.href='../views/admin_AllProductAndServiceInfo.php';
				</script>
				";
		
	}

?>
