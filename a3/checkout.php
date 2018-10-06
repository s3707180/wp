<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>John Leonard Press : About</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="logo">
        <a href="index.php">
            <img src="images/logo.jpg" height="191px" width="300px">
        </a>
    </div>

    <div class="Header">

        <nav class="PrimaryNavigation">
            <form method="get" action="/search" id="search1">
                <a href="index.php">Home</a>
                <a href="products.php">Products</a>
                <a href="login.php">Log-in</a>
                <a href="aboutus.php">About Us</a>

                <input id="search" type="text" placeholder="search" />
                <a href="cart.php">🛒</a>
            </form>
        </nav>

    </div>
    <div class="row">
        <div class="col-75">
            <div class="mainContainer">
                <div class="fullLightGreyBox">
				<form method="POST" action="Receipt.php">
                    <a href="products.php"><button class="button"><span> 🛒 Back Shopping </span></button></a>
                    <button class="button" ><span>💰Submit </span></button>
                    <!-- Title -->
                    <div class="hed">

                        <h2>Checkout</h2>
                        <h3>Your details</h3>
						
                    <table>
						<tr><td> <label for="name"><i class="name"> Full Name&nbsp;&nbsp;</i></label></td>
                            <td><input type="text" id="name" name="name" placeholder="Mark Smith"   style="width:200%; height:20px"></td></tr>
                         <tr><td>   <label for="email"><i class="eamil"></i> Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                             <td> <input type="text" id="email" name="email" placeholder="mark@gmail.com" style="width:200%; height:20px"></td></tr>
                           <tr><td> <label for="address"><i class="address"></i> Address&nbsp;&nbsp;&nbsp;</label></td>
                           <td> <input type="text" id="address" name="address" placeholder="24 Mcivor street" style="width:200%; height:20px"></td></tr>
                           <tr><td> <label for="city"><i class="city"></i> City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                          <td>  <input type="text" id="city" name="city" placeholder="Melburne" style="width:200%; height:20px"></td></tr>
                        <tr><td>    <label for="state">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                           <td> <input type="text" id="state" name="state" placeholder="VIC" style="width:60%; height:20px"></td></tr>
                          <tr><td>  <label for="Postcode">PostCode</label></td>
                           <td> <input type="text" id="Postcode" name="Postcode" placeholder="3047" style="width:60%; height:20px"></td></tr>
					</table>
					</form>
                    </div>
					
                    <?php include 'footer.php'?>
					
				</body>
			</html>
			