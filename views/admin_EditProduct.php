<?php 

	  include 'admin_Header.php';
	  
	  require_once ('../controllers/admin_ProductController.php');
	  

	  $r_product_id = $_GET["product_id"];
	  
	  $product=getProduct($r_product_id);

	  
?>



			



<div class="center">
		
		<table>
		
		
		
				<!-- show employee_image -->
				
				
				
<!--************************************************************************************************-->	
			<td>
				<img class="item-image" style="margin-right:20px" src="<?php echo $product["employee_image"];?>"></img>
			</td>
<!--************************************************************************************************-->			
	
	
			<td>
				<form method="post" action="../controllers/admin_ProductController.php" enctype="multipart/form-data" class="form-horizontal form-material">
					
					<div class="form-group">
					
						<h4 class="text"><b>Owner Name :</b></h4> 
						<input type="text" name="owner_name" value="<?php echo $product["owner_name"];?>" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>Owner Address :</b></h4> 
						<input type="text" name="owner_address" value="<?php echo $product["owner_address"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="text" name="email_address" value="<?php echo $product["email_address"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="text" name="contact_no" value="<?php echo $product["contact_no"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
						
						<h4 class="text"><b>Delivery Address :</b></h4> 
						
						<select name="delivery_address"  class="form-control">
							<option selected="selected"><?php echo $product["delivery_address"];?></option>
							
							<option> chittagong </option>
							
							<option> khulna </option>
							<option> sylhet </option>
							
							<option>  </option>
							
							
						</select>	
						
					</div>
					
					
					<div class="form-group">
					
						<h4 class="text"><b>delivery status:</b></h4> 
						<input type="text" name="delivery_status" value="<?php echo $product["delivery_status"];?>" class="form-control">
						
					</div>	
					
<!--*************************************************************************************************-->			
					<div class="form-group">
						
						<h4 class="text"><b>Payment Status :</b></h4> 
						
						<select name="payment_status"  class="form-control">
							<option selected="selected"><?php echo $product["payment_status"];?></option>
							<option> Complete </option>
							<option> (due) </option>
							<option>(partial) </option>
							<option> </option>
						</select>	
						
					</div>
										

			
				<!-- edit employee_image -->
				
				
				
<!--************************************************************************************************-->			
				<div class="form-group">
			
					<h4 class="text"><b>Employee Image :</b></h4> 
					<input type="file" name="employee_image" class="form-control">
			
				</div>
<!--***************************************************************************************************-->
				
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

<!--*************************************************************************************************-->					
					<input type="hidden" name="employee_id" value="<?php echo $product["employee_id"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $product["employee_image"];?>" class="form-control">	
					
<!--*************************************************************************************************-->		
						<input type="submit" class="btn btn-success" name="edit_Product" value=" Edit/Update product Info " class="form-control">
						
					</div>
				
				</form>
			</td>
			
		</table>
		
</div>





<?php include 'admin_Footer.php';?>


