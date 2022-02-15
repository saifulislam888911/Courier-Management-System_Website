<?php 

	  include 'admin_Header.php';
	  
	  require_once ('../controllers/admin_CustomerController.php');
	  

	  
	  $r_customer_id = $_GET["customer_id"];
	  
	  $customer=getCustomer($r_customer_id);


	  
?>



				



<div class="center">
		
		<table>
		
			
			<td>
				<img class="item-image" style="margin-right:20px" src="<?php echo $customer["customer_image"];?>"></img>
			</td>
	
	
			<td>
				<form method="post" action="../controllers/admin_CustomerController.php" enctype="multipart/form-data" class="form-horizontal form-material">
					
					<div class="form-group">
					
						<h4 class="text"><b>Customer Name :</b></h4> 
						<input type="text" name="customer_name" value="<?php echo $customer["customer_name"];?>" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>Customer Address :</b></h4> 
						<input type="text" name="customer_address" value="<?php echo $customer["customer_address"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="text" name="email_address" value="<?php echo $customer["email_address"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="text" name="contact_no" value="<?php echo $customer["contact_no"];?>" class="form-control">
						
					</div>
					
<!--*************************************************************************************************-->					
										
					<div class="form-group">
			
						<h4 class="text"><b>Courier ProductAndService Status :</b></h4> 
						
						<select name="courier_ProductAndService_status"  class="form-control">
						<option selected="selected"><?php echo $customer["courier_ProductAndService_status"];?></option>				
						<option> (Pick-Up Request) </option>
						<option> Sent </option>
						<option> Recieved </option>					
						<option> </option>	
						
						</select>
						
					</div>
					
					
					<div class="form-group">
					
						<h4 class="text"><b> ProductAndService Id :</b></h4> 
						
						<input type="text" name="ProductAndService_id" value="<?php echo $customer["ProductAndService_id"];?>" class="form-control">

					</div>
					
					
					<div class="form-group">
			
						<h4 class="text"><b>Delivery Status :</b></h4> 
						
						<select name="delivery_status"  class="form-control">
						<option selected="selected"><?php echo $customer["delivery_status"];?></option>			
						<option> Picked-Up </option>
						<option> On The way </option>
						<option> Shipped </option>
						<option> </option>
						
						</select>	
					</div>
					
<!--*************************************************************************************************-->		
	
					<div class="form-group">
						
						<h4 class="text"><b>Payment Status :</b></h4> 
						
						<select name="payment_status"  class="form-control">
							<option selected="selected"><?php echo $customer["payment_status"];?></option>
							<option> Complete </option>
							<option> (due) </option>
							<option>(partial) </option>
							<option> </option>
						</select>	
						
					</div>
										

			
				<!-- edit customer_image -->
				
				
				
<!--************************************************************************************************-->			
				<div class="form-group">
			
					<h4 class="text"><b>Customer Image :</b></h4> 
					<input type="file" name="customer_image" class="form-control">
			
				</div>
<!--***************************************************************************************************-->
				
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

<!--*************************************************************************************************-->					
					<input type="hidden" name="customer_id" value="<?php echo $customer["customer_id"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $customer["customer_image"];?>" class="form-control">	
					
<!--*************************************************************************************************-->		
						<input type="submit" class="btn btn-success" name="edit_Customer" value=" Edit/Update Customer Info " class="form-control">
						
					</div>
				
				</form>
			</td>
			
		</table>
		
</div>



			



<?php include 'admin_Footer.php';?>


