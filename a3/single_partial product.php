
				<section>
					<div>
						<div class="rcol">
							<h2><?php echo $products_array[$id]['name'] ?></h2>		

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