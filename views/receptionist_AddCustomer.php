<?php 
	
	include 'receptionist_Header.php';
	
	
	  
?>






<div class="center">

	<form method="post" action="../controllers/receptionist_CustomerController.php" enctype="multipart/form-data" class="form-horizontal form-material">
		
					<div class="form-group">
					
						<h4 class="text"><b>Customer Name :</b></h4> 
						<input type="text" name="customer_name" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>Customer Address :</b></h4> 
						<input type="text" name="customer_address" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="text" name="email_address" class="form-control" >
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="text" name="contact_no" class="form-control" >
						
					</div>
					
					
<!-- ***************************************** -->					
					
					<div class="form-group">
			
						<h4 class="text"><b>Courier ProductAndService Status :</b></h4> 
						
						<input type="radio" name="courier_ProductAndService_status"  value="(Pick-Up Request)" > (Pick-Up Request) <br/>
						<input type="radio" name="courier_ProductAndService_status"  value="Sent" > Sent <br/>
						<input type="radio" name="courier_ProductAndService_status"  value="Recieved" > Recieved <br/>
							
					</div>
					
					
					<div class="form-group">
					
						<h4 class="text"><b> ProductAndService Id :</b></h4> 
						<input type="text" name="ProductAndService_id" class="form-control">
						
					</div>
					
					
					<div class="form-group">
			
						<h4 class="text"><b>Delivery Status :</b></h4> 
						
						<input type="radio" name="delivery_status"  value="Picked-Up" > Picked-Up <br/>
						<input type="radio" name="delivery_status"  value="On The way" > On The way <br/>
						<input type="radio" name="delivery_status"  value="Shipped" > Shipped <br/>
							
					</div>
						
<!-- ***************************************** -->					
				
					
					
					
					
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
					
						<h4 class="text"><b>Customer Image :</b></h4> 
						<input type="file" name="customer_image" class="form-control">
						
					</div>
				
				
					<div class="form-group text-center">
									
						<input type="submit" class="btn btn-success" name="add_Customer" value=" Add Customer " class="form-control">
						
					</div>
				
				</form>
			
</div>



			


<?php include 'receptionist_Footer.php';?>


