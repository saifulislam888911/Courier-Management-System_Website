<?php 

	  include 'admin_Header.php';
	  
	  require_once ('../controllers/admin_ProductController.php');
	  
	  
	  $r_product_id = $_GET["product_id"];
	  
	  $product=getProduct($r_product_id);

	  
		$product_information = getAllProductInfo();	                  
	  
?>






<div   class="center" >

					
		<h1 class="text text-center"><b><u>***PRODUCT INFORMATION***</b></u></h1>
						
		
		<table>
			<tr>
		
		
			<td align="center">
				<img class="item-image"  src="<?php echo $employee["employee_image"];?>"></img>
				
				<?php
				
				echo '<div class="add-to-cart"><span><a href="admin_EditEmployee.php?employee_id='.$employee["employee_id"].'" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Update Info</a></span></div>';
		
				
				?>
				
			</td>
			
	
	
			<td align="right">	

					<div class="form-group">
						<h3 class="text"><b>Product ID	:	</b>
						<i><input type="button" name="product_id" value="<?php echo $product["product_id"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"> </i></h3>	
					</div>	
							
							
					<div class="form-group" >
					
						<h4 class="text"><b>Owner Name :</b></h4> 
						<input type="button" name="Owner_name" value="<?php echo $product["Owner_name"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>__Owner Address :</b></h4> 
						<input type="button" name="owner_address" value="<?php echo $product["owner_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="button" name="email_address" value="<?php echo $product["email_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="button" name="contact_no" value="<?php echo $product["contact_no"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Delivery Address :</b></h4> 
						<input type="button" name="delivery_address" value="<?php echo $product["delivery_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
					
					<div class="form-group">
					
						<h4 class="text"><b>Delivery Status:</b></h4> 
						<input type="button" name="delivery_status" value="<?php echo $product["salary"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
			
					<div class="form-group">
						
						<h4 class="text"><b>Payment Status :</b></h4> 
						<input type="button" name="payment_status" value="<?php echo $product["payment_status"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">						
						
					</div>
										


				
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

<!--*************************************************************************************************-->					
					<input type="hidden" name="product_id" value="<?php echo $product["product_id"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $product["product_image"];?>" class="form-control">	
					
<!--*************************************************************************************************-->								
					</div>
				
				
			</td>
		</tr>	
	</table>
		
</div>






<?php include 'admin_Footer.php';?>


