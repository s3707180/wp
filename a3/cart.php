<!DOCTYPE HTML>
<html>
	<?php 
	session_start();
	include 'head.php';
	head_module('Cart');	?>

	<?php
	include 'tools.php';
	$products_array = getProductsArr();

	if (isset($_POST["id"])) {
		$_SESSION['cart_arr'][]=$_POST; 
	}
	else if (isset($_GET['clearAll']) && $_GET['clearAll']=='true') {
		unset($_SESSION['cart_arr']);
	}
	
?>

	<body>
		<?php include 'header.php'?>
		<div class="mainContainer">
			<div class="fullLightGreyBox">
				<a href="products.php">
					<button class="button">
						<span> 🛒 Back Shopping </span>
					</button>
				</a>
				<a href="cart.php?clearAll=true">
					<button class="button">
						<span>❌Clear Cart</span>
					</button>
				</a>


				<div class="hed">
                Shopping Cart
					<table>
						<?php 
					$total=0;
					if( isset($_SESSION['cart_arr']))
					foreach ($_SESSION['cart_arr'] as $cartItem)  {?>
						<tr>
							<td>
								<img src="images/<?php echo $products_array[(int)$cartItem['id']]['image']?>" alt="Collusion book cover" style="width:100px" />
							</td>
							<td>&nbsp;&nbsp;<label>Book name:</label>
								<label>
									<?php echo $products_array[(int)$cartItem['id']]['name']?>
								</label>&nbsp;&nbsp;
								<label>option:</label>
								<label>
									<?php echo $cartItem['option'];?>
								</label>
								<label>Quantity:</label>
								<label>
									<?php echo $cartItem['qty'];?>
								</label>&nbsp;&nbsp;
								<label>Price:</label>
								<label>$<?php echo $products_array[(int)$cartItem['id']]['price']?>
                                <label>Subtotal$<?php echo $products_array[(int)$cartItem['id']]['price']*$cartItem['qty'];?>
								</label>&nbsp;&nbsp;
							</td>
						</tr>
						<tr><td colspan="2">
					<?php $total+=$products_array[(int)$cartItem['id']]['price']*$cartItem['qty'];}?>
					<label>Total Price : $</label><?php echo $total; ?></td></tr>
					</table>
				</div>
			</div>

		</div>

		<div class="mainContainer">
			<a href="checkout.php">
				<button class="button">
					<span>💰Checkout </span>
				</button>
			</a>
		</div>

		<?php include 'footer.php'?>
	</body>

</html>
