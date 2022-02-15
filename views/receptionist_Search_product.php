<?php
	
	$s = "localhost";
	$u = "root";
	$p = "";
	$d = "sundarban_courier";
	
	$conn = mysqli_connect($s,$u,$p,$d);

if(isset($_GET["sk"]))
{	
	$key = mysqli_real_escape_string($conn,$_GET["sk"]);
	$query="
			SELECT * FROM product_information 
			WHERE owner_name LIKE '%$key%'
			";
}
else{
		
		 echo  "<h3><u><i> write Search key words...  </i></u></h3>";
	}
	
	
	$result = mysqli_query($conn,$query) ;

?>


<div>


	<table class="table table-striped" >
	
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Product ID </u></th>
			<th><u> Owner Name </u></th>
			<th><u> Owner Address </u></th>
			<th><u> Email Address </u></th>
			<th><u> Contact No. </u></th>
			<th><u> Delivery address </u></th>
			<th><u> Delivery status </u></th>
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>	
			<th></th>
			
		</thead>
		
		<tbody>
			<?php
			
				if(mysqli_num_rows($result) > 0)
				{
			
					while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
						
								echo "<td>"."</td>";
								echo "<td>"."</td>";
									
									echo "<td>".$row["product_id"]."</td>";
									echo "<td>".$row["owner_name"]."</td>";
									echo "<td>".$row["owner_address"]."</td>";
									echo "<td>".$row["email_address"]."</td>";
									echo "<td>".$row["contact_no"]."</td>";
									echo "<td>".$row["delivery_address"]."</td>";
									echo "<td>".$row["delivery_status"]."</td>";
									echo "<td>".$row["payment_status"]."</td>";
									
								echo "<td>"."</td>";
								
			
									echo '<td><a href="receptionist_ViewProductInfo.php?employee_id='.$row["product_id"].'" class="btn btn-primary">View</a></td>';
									
									echo '<td><a href="receptionist_EditProduct.php?employee_id='.$row["product_id"].'" class="btn btn-success">Edit</a></td>';
								
									echo '<td><a href="receptionist_DeleteProduct.php?employee_id='.$row["product_id"].'" class="btn btn-danger">Delete</a></td>';

								
							echo "</tr>";
					
								}
								
						}


				else
					{
						 echo "<h3><u><i> ........ Search Data Not Found ........ </i></u></h3>" ;
					}
						
						
						
			?>
					
				</tbody>
				
			</table>
			
</div>
