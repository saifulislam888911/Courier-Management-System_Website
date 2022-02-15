<?php

		
		include 'receptionist_Header.php' ;
		
		require_once ('../controllers/receptionist_CustomerController.php') ;
	//	require_once ('../controllers/receptionist_EmployeeController.php') ;
		
		
		//$employee_information = getAllEmployeeInfo();
		$customer_information = getAllCustomerInfo();
		
		
		
		
		
		//$t_employee_information = count(getAllEmployeeInfo());
		$t_customer_information = count(getAllCustomerInfo());
		
//******************************
//******************************		
//		$t_ProductAndService_information = count(getAllProductAndServiceInfo());
		
?>


<div>
			<table align = "center">
				<tr>
										
					<td>
						
						<div class = "card">
						
							<span class="text-white"><u> Total Customer </u> <br>
								<?php echo $t_customer_information;  ?>
							</span>
						</div>

					</td>

					<td>
<!--//******************************
//******************************	-->						
						<div class = "card">
						
							<span class="text-white"><u> Total ProductAndService </u> <br>
								<?php echo $t_customer_information;  ?>
							</span>
						</div>

					</td>
						
				</tr>

			</table>




<!--//******************************
//******************************	-->				
<div>


	<table class="table table-striped">
		
		
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Customer ID </u></th>
			<th><u> Customer Name </u></th>
			<th><u> Customer Address </u></th>
		
			
			<th><u> Courier ProductAndService Status </u></th>
			<th><u> ProductAndService Id </u></th>
			<th><u> Delivery Status </u></th>
			
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>	
			<th></th>
			
		</thead>

		<tbody>
			<?php
				foreach($customer_information as $customer)
				{
					echo "<tr>";
						
						echo "<td>"."</td>";
						echo "<td>"."</td>";
							
							echo "<td>".$customer["customer_id"]."</td>";
							echo "<td>".$customer["customer_name"]."</td>";
							echo "<td>".$customer["customer_address"]."</td>";
							
							
							echo "<td>".$customer["courier_ProductAndService_status"]."</td>";
							echo "<td>".$customer["ProductAndService_id"]."</td>";
							echo "<td>".$customer["delivery_status"]."</td>";
							
							echo "<td>".$customer["payment_status"]."</td>";
							
						echo "<td>"."</td>";
						
							echo '<td><a href="receptionist_ViewCustomerInfo.php?customer_id='.$customer["customer_id"].'" class="btn btn-primary">View</a></td>';
							
				
						
					echo "</tr>";
			
				}
			?>
			
		</tbody>
		
	</table>



		
</div>		


<?php include 'receptionist_Footer.php'; ?>			