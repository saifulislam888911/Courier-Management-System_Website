<?php 

	include 'main_header.php';
	
	include '../controllers/LoginPanelController.php';
	
	
?>



			
	<script>
			function validate_form()
			{
				user_name = document.getElementById("user_name").value ;
				password = document.getElementById("password").value ;
				
				var valid = false;
				
				if(user_name == "" )
				{
					valid = false;
					
					document.getElementById("err_user_name").innerHTML = "Name Required" ;
				}
				else
				{
					document.getElementById("err_user_name").innerHTML = "" ;
					
					valid = true;
				}
				
				if(password == "" )
				{
					valid = false;
					
					document.getElementById("err_password").innerHTML = "Password Required" ;
				}
				else
				{
					document.getElementById("err_password").innerHTML = "" ;
					
					valid = true;
				}
				
				return valid;
			}
	</script>				




		<div class="center-login">
		
			<h1 class="text text-center">Login</h1>
			
			<form method="POST" onsubmit="return validate_form()" action="login.php" class="form-horizontal form-material">
			
				<div class="form-group">
				
					<h4 class="text">Username :</h4> 
					<input type="text" name="user_name" id="user_name" class="form-control" >
					<span id="err_user_name" name="err_user_name"></span>
					<br>
					
				</div>
				
				<div class="form-group">
				
					<h4 class="text">Password :</h4> 
					<input type="password" name="password" id="password" class="form-control" >
					<span id="err_password" name="err_password"></span>
					<br>
					
				</div>

			
				<div class="form-group">
				
				<!--	<h4 class="text">Log in As :</h4> -->
					<input type="hidden" name="title" class="form-control" >
					
				</div> 	
		
				
				
				
				<div class="form-group text-center">
					
					<input type="submit" name="login" class="btn btn-danger" value="Login" class="form-control">
					
				</div>
				
				
				
				
				<div class="form-group text-center">
					
					<a href="signup.php" >Not registered yet? Sign Up</a>
					
				</div>
				
			</form>	
				
		</div>
		


				
				

<?php include 'main_footer.php';?>