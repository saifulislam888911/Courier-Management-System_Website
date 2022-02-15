<?php 

	include 'main_header.php';
	
?>



			


<br/>
<br/>

<div class="center-login">

	<h1 class="text text-center"><b><u>Sign Up</b></u></h1>
	
	<form method="post" action="../controllers/SignUpController.php" enctype="multipart/form-data" class="form-horizontal form-material">
	
	
		<div class="form-group">
		
			<h4 class="text"><b>Name :</b></h4> 
			<input type="text" name="customer_name" class="form-control" required>
						
		</div>	
		
		
		
			
		<div class="form-group">
			<h4 class="text"><b>Username :<b></h4> 
			<input type="text" name="user_name" class="form-control" required>
		</div>
		
		<div class="form-group">
			<h4 class="text"><b>Password :<b></h4> 
			<input type="password" name="password" class="form-control" required>
		</div>
	
		
		
		<div class="form-group">
					
			<h4 class="text"><b>Home Address :</b></h4> 
			<input type="text" name="customer_address" class="form-control" required>
						
		</div>

		<div class="form-group">
					
			<h4 class="text"><b>Email :</b></h4> 
			<input type="text" name="email_address" class="form-control" value="@gmail.com" required>
						
		</div>
					
		<div class="form-group">
					
			<h4 class="text"><b>Contact No :</b></h4> 
			<input type="text" name="contact_no" class="form-control" value="+880-1" required>
				
		</div>

		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="sign_up" value="Sign Up" class="form-control" >
			
		</div>
		
	
	</form>	
	

	
</div>

<br/>
<br/>
<br/>
<br/>
<br/>



<?php include 'main_footer.php';?>

