<?php

	require_once '../models/database.php';
		
		
	if(isset($_POST["sign_up"]))						
	{
	
		$conn = mysqli_connect($serverName, $userName,  $password, $dbName);

		
		$result= mysqli_query($conn,$query);
		
		if($result)
		{
			
		}
		else
		{
			echo "DB error";
		}

		
		
		
		echo"
				<script>
				alert(' Your ID is Successfully  Created ');
				alert(' Now Log-In your ID to continue... ');
				window.location.href='../views/login.php';
				</script>
				";
		
	}
	
?>
