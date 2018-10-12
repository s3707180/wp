	<?php		
	session_start();
	include 'tools.php';
	checkoutValidation();
	saveOrder();
	?>

<!DOCTYPE HTML>
<html>

<?php
	include 'head.php' ;
	head_module('Receipt');	?>


	<body>
		<?php include 'header.php'?>
		<?php
	$products_array = getProductsArr();
?>
		<div class="mainContainer">
			<div class="fullLightGreyBox">

				<div class="container">
					<div class = "con">
						<p> name: <?php  echo isset ($_POST['name'])? $_POST['name']:"" ?><br>
						Address:<?php 
						echo isset ($_POST['address'])? $_POST['address']:""."    "; 
						echo isset ($_POST['city'])? $_POST['city']:""."    ";
						echo isset ($_POST['state'])? $_POST['state']:""."    ";
						echo isset ($_POST['Postcode'])? $_POST['Postcode']:"" ?>  <br>
						products details:  <br>
										<?php 
										$total=0;
									
       if( isset($_SESSION['cart_arr']))
					foreach ($_SESSION['cart_arr'] as $cartItem)  {?>
										<?php echo $products_array[(int)$cartItem['id']]['name']?>
										<?php echo $cartItem['option'];?>
										<?php echo $cartItem['qty'];?>
										<?php echo '<br>';?>
									<?php $total+=$products_array[(int)$cartItem['id']]['price']*$cartItem['qty'];}?>
					<label>Total Price : $</label><?php echo $total; ?><br>
					

																	
																	Thank you for shopping with Alza </p>
										<img src="images/logo.jpg" height="150px" width="230px" >   

										</div>
									</div> 
								</div>

							<hr />
					</div>

					<?php 
					//clear the cart after the receipt is displayed
					unset($_SESSION['cart_arr']);
					include 'footer.php'?>

				</body>
			</html>
			