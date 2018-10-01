<?php $productsFile = fopen("products.txt", "r") or die("Unable to open file!");
		$productsStr = fread($productsFile, filesize("products.txt"));
		fclose($productsFile);
		//echo $productsStr;
		$productsLineArr=explode("\n",$productsStr);
		# echo nl2br(print_r( $productsLineArr,true));
		$index=-1;
		
		foreach($productsLineArr as $line)
		{
		if ($index == -1) {
			$index++;
			continue;
		} 
		$tmpArr = explode("\t", $line);
		$products_array[$index]['ID'] = $tmpArr[0];
		$products_array[$index]['name'] = $tmpArr[1];
		$products_array[$index]['price'] = $tmpArr[2];
		$products_array[$index]['author'] = $tmpArr[3];
		$products_array[$index]['image'] = $tmpArr[4];
		$products_array[$index]['about'] = $tmpArr[5];

		$index++;
		}

		if (isset($_GET['id'])){
			$id = $_GET['id'];
		}
 ?>
<!DOCTYPE HTML>
<html>

	<?php include 'head.php' ;
	head_module('Product: RECURRENCE');	?>


	<body>
		<?php include 'header.php'?>
		<div class="mainContainer">
			<div class="fullLightGreyBox">


				<section>
					<div>
						<div class="rcol">
							<h2>RECURRENCE</h2>		

							<h5>About book</h5>

							<?php 
							echo '<P>'.$products_array[$id]['about'].'</p>'	;						
							echo '<hr/>';
							echo '</div>';
							echo '<div class="lcol"> ';
						   	echo "<img src=\"images/{$products_array[$id]['image']}\"".' height="300px" width="200"  alt="book cover" />';
?>
							<ul>    

							</ul>
							<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post" onsubmit='return formValidate();'>
								<div class="product_form">
									<input type="hidden" id="id" name="id" value="<?php echo $products_array[$id]['ID'] ?> ">
										<table style="width:100%">
											<tr>
												<th>
													<label>Price:</label>
												</th>
												<th>
													<label>$<?php echo $products_array[$id]['price'] ?>
													</label>
												</th> 
											</tr>
											<tr>
												<th>
													<label>Option</label>
												</th>
												<th>
													<select name="option">
														<option value="hardcover">Hardcover</option>
														<option value="softcover">Softcover</option>
													</select>
												</th> 
											</tr>
											<tr>
												<th>
													<label for="qty">
														<b>Quantity</b>
													</label>
												</th>
												<th>
													<input type="button" value="-" onclick="minus();">
														<input type="text" id="qty" name="qty" size="3">
															<input type="button" value="+" onclick="plus();">
															</th> 

														</tr>
														<tr>
															<th colspan=2>
																<label class='errMsg' id="errorMessage" hidden > Error Enter Postive Integer</label>
															</th>
														</tr>
														<tr>
															<th colspan=2 >
																<button type="submit" style="width:90%" >Add</button>
															</th>

														</tr>
													</table>

												</div>
											</form>

										</div>


									</div>    
									<!--REVIEW 1--> 
									<div class="reviews">   


									</div>
								</div>
							</section>
						</div> 
						<?php include 'footer.php'?>
					</body>
				</html>
				