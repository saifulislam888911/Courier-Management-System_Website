<?php 
	
	include 'admin_Header.php';
	
	  
?>



				



<div class="center">

	<form method="post" action="../controllers/admin_EmployeeController.php" enctype="multipart/form-data" class="form-horizontal form-material">
		
					<div class="form-group">
					
						<h4 class="text"><b>Employee Name :</b></h4> 
						<input type="text" name="employee_name" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>Employee Address :</b></h4> 
						<input type="text" name="employee_address" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="text" name="email_address" class="form-control" 
						>
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="text" name="contact_no" class="form-control" >
						
					</div>
					
					<div class="form-group">
						
						<h4 class="text"><b>Employee position :</b></h4> 
						
						<select name="employee_position"  class="form-control">
							<option selected="selected">**choose**</option>
							
							<option> Delivery Man </option>
							
							<option> HR </option>
							<option> IT_Specialist </option>
							<option> Receptionist </option>
							
							<option> Maintainance_Specialist </option>																			
												
							<option> Manager </option>
							
							<option> Cleaner </option>
							<option> Security </option>
							
							<option>  </option>
							
							
						</select>	
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Salary :</b></h4> 
						<input type="text" name="salary" class="form-control" value="/-bdt">
						
					</div>	
					
					<div class="form-group">
			
						<h4 class="text"><b>Payment Status :</b></h4> 
						
						<input type="radio" name="payment_status"  value="Complete" > Complete <br/>
						<input type="radio" name="payment_status"  value="(due)" > (due) <br/>
						<input type="radio" name="payment_status"  value="(partial)" > (partial) <br/>
							
					</div>
									
<br/>
<br/>
<br/>
	


					
					<div class="form-group">
					
						<h4 class="text"><b>Employee Image :</b></h4> 
						<input type="file" name="employee_image" class="form-control">
						
					</div>

				
				
					<div class="form-group text-center">
									
						<input type="submit" class="btn btn-success" name="add_Employee" value=" Add Employee " class="form-control">
						
					</div>
				
				</form>
			
</div>






<?php include 'admin_Footer.php';?>


