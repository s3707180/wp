<?php 
		include 'tools.php';
		$products_array = getProductsArr();
		
		
		if (isset($_GET['id'])){
			$id = $_GET['id'];
			
			if (!isset($products_array[$id])) {
				header("Location: products.php");
			}
		}
 ?>
 
<!DOCTYPE HTML>
<html>
	<?php include 'head.php' ;
	head_module('Product');	?>
	

		<body>
			<?php include 'header.php'?>

				<div class="mainContainer">
					<div class="fullLightGreyBox">
<?php if ( isset($id)){
 include 'single_partial product.php';}
else { include 'partial_prodcts.php';}?>
					</div>
				</div>

				<?php include 'footer.php'?>

				</body>
			</html>
			