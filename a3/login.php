<!DOCTYPE HTML>
<html>
	<?php 
		session_start();
	include 'head.php' ;
	head_module('Log-in');	?>
	

		<body>
<?php include 'header.php'?>
				<div class="mainContainer">
					<div class="fullLightGreyBox">
						<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post">
							<div class="container">
								<div class = "con">
									<label for="email">
										<b>Username</b>
									</label>
									<input type="email" placeholder=" 👤 Enter Username" name="email" style="width:50%; height:12%" required>
										<br>

											<br>
												<label for="password">
													<b>Password</b>
												</label>
												<input type="password" placeholder=" 🔑 Enter Password" name="password" style="width:50%; height:12%" required>
													<br>
														<br>

															<button type="submit" style="width:85%; height:12%"  >
																<b>Login<b>
																	</button>
																	<br>

																		<img src="images/logo.jpg" height="150px" width="230px" >   
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
													