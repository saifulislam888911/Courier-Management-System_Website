<?php



			
		$host ="localhost";
		$name="root";
		$pass="";
		$dbname="sundarban_courier";
		$con = mysqli_connect($host,$name,$pass) or die ('Unable to connect Database');
		mysqli_select_db($con,$dbname);



					
    if(isset($_POST['login']))
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		

		$query  = "SELECT * FROM `login_panel` WHERE  user_name='$user_name' AND password='$password'" ;
		
			
		$result= mysqli_query($con,$query);
		
		
	if($result)
		{
			if(mysqli_num_rows($result) > 0 )
			{
				
				while($row = mysqli_fetch_assoc($result))
					{	
						if($row["title"] == "Administration")
						{
							$_SESSION["LoginUser"] = $row["user_name"];
							
						
							
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='admin_dashboard.php';
							</script>
							";
						
						}
						
						elseif($row["title"] == "Reception")
						{
							$_SESSION["LoginUser"] = $row["user_name"];
							
						//	header('Location: receptionist_dashboard.php');
							
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='receptionist_dashboard.php';
							</script>
							";
							
						}
						
						elseif($row["title"] == "Customer")
						{
						//	$_SESSION["LoginUser"] = $row["user_name"];
						
							setcookie("LoginUser" , $row["user_name"] , time()+180);
							
						
						
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='customer_dashboard.php';
							</script>
							";
						}
						
						else
						{
							echo"
							<script>
							alert(' Invalid User ');
							window.location.href='login.php';
							</script>
							";
						
						}
						
					}
					
			}
			
			else
			{
				
				echo"
				<script>
				alert(' UserName or Password Invalid ');
				window.location.href('signup.php');
				</script>
				";
			}
			
			
		}
		else
			{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('login.php');
				</script>
				";
			}
		
		
		
	}
	

	else
	{
	}

?>

</div>


