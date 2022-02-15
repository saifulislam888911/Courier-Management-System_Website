<?php 

	include 'admin_Header.php';
	
	require '../controllers/admin_ProductController.php';
	
	$product_information = getAllProductInfo();
	
	
	
?>





<div >

	<h2 style="color:red" class="text" ><b><u> All products' Information of Sundarban Courier Service : </u></b></h2>
	
<br/>
<br/>
<br/>




	<script>		
		
		function searchProduct()
			{
				http = new XMLHttpRequest();
				
				var search_word = document.getElementById("search_input").value;
				
				http.onreadystatechange = function()
				{
					if(http.readyState==4 && http.status== 200)
					{
						document.getElementById("search_result").innerHTML=http.responseText;
					}
					
				}
				
				http.open("GET","admin_Search_product.php?sk="+search_word,true);
				http.send();
				
			}
		
		
		</script>

			<div  class="center">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text"  id="search_input" onkeyup="searchProduct()" placeholder="Search by Product Details" class="form-control" />
				</div>
			</div>
				
			<div id="search_result">
			</div>



	
 	
	<table class="table table-striped">
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Product ID </u></th>
			<th><u> Owner Name </u></th>
			<th><u> OwnerAddress </u></th>
			<th><u> E-mail Address </u></th>
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
				foreach($product_information as $product)
				{
					echo "<tr>";
						
						echo "<td>"."</td>";
						echo "<td>"."</td>";
							
							echo "<td>".$product["product_id"]."</td>";
							echo "<td>".$product["owner_name"]."</td>";
							echo "<td>".$product["owner_address"]."</td>";
							echo "<td>".$product["email_address"]."</td>";
							echo "<td>".$product["contact_no"]."</td>";
							echo "<td>".$product["delivery_address"]."</td>";
							echo "<td>".$product["delivery_status"]."</td>";
							echo "<td>".$product["payment_status"]."</td>";
							
						echo "<td>"."</td>";
						
	
							echo '<td><a href="admin_ViewProductInfo.php?product_id='.$product["product_id"].'" class="btn btn-primary">View</a></td>';
							
							echo '<td><a href="admin_EditProduct.php?product_id='.$product["product_id"].'" class="btn btn-success">Edit</a></td>';
						
							echo '<td><a href="admin_DeleteProduct.php?employee_id='.$product["product_id"].'" class="btn btn-danger">Delete</a></td>';

						
					echo "</tr>";
			
				}
			?>
			
		</tbody>
		
	</table>
	
</div>



				



<?php include 'admin_Footer.php';?>


