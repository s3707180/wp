<!DOCTYPE HTML>
<html>

	<?php
	session_start();

	include 'head.php' ;
	head_module('Receipt');	?>


	<body>
		<?php include 'header.php'?>
		<?php
	include 'tools.php';
	$products_array = getProductsArr();

	if (isset($_POST["id"])) {
		$_SESSION['cart_arr'][]=$_POST; 
	}
	else if (isset($_GET['clearAll']) && $_GET['clearAll']=='true') {
		unset($_SESSION['cart_arr']);
	}
	//print_r($products_array);
	
	//print_r($_SESSION);
?>


		<div class="mainContainer">
			<div class="fullLightGreyBox">

				<div class="container">
					<div class = "con">



						<p> name: Liza <br>
						Adress: 23xxx <br>
						products details:  <br>
										<?php 
       if( isset($_SESSION['cart_arr']))
					foreach ($_SESSION['cart_arr'] as $cartItem)  {?>
										<?php echo $products_array[(int)$cartItem['id']]['name']?>
										<?php echo $cartItem['option'];?>
										<?php echo $cartItem['qty'];?>
										<?php echo '<br>';
									} ?>

																	Total Price: 222 <br>
																	Thank you for shopping with Alza </p>
										<img src="images/logo.jpg" height="150px" width="230px" >   

										</div>
									</div> 
								</div>
							</form>

							<hr />


							<div class="clear"/>

						</div>
					</div>

					<?php include 'footer.php'?>

				</body>
			</html>
			