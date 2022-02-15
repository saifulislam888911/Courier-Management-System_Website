<?php 
	  
	  
	  
	  require_once ('../controllers/receptionist_ProductController.php');
	  
	  $r_product_id = $_GET["product_id"];
	  
	  $product= deleteProduct($r_product_id);
	  

	  
?>