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
                    <a href="products.php"><button class="button"><span> 🛒 Back Shopping </span></button></a>
                    <a href="products.php"><button class="button"><span>❌Clear Cart</span></button></a>
                    <a href="checkout.php"><button class="button"><span>💰Submit </span></button></a>
                    <!-- Title -->
                    <div class="hed">

                        <h2>Checkout</h2>
                        <h3>Your details</h3>

                        <p> <label for="name"><i class="name"></i> Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Mark Smith"><br>
                            <label for="email"><i class="eamil"></i> Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="email" name="email" placeholder="mark@gmail.com"><br>
                            <label for="address"><i class="address"></i> Address&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="address" name="address" placeholder="24 Mcivor street"><br>
                            <label for="city"><i class="city"></i> City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="city" name="city" placeholder="Victoria"><br>
                            <label for="state">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="state" name="state" placeholder="VIC"><br>
                            <label for="Postcode">PostCode</label>
                            <input type="text" id="Postcode" name="Postcode" placeholder="3047"><br></p>
                    </div>
                  
                    <a href="Receiptbutton class="button"><span>💰Submit </span></button></a>
                    <div class="footer">

                        <table align="center">
                            <tr>
                                <td>
                                    <img src="images/logo.jpg" height="191px" width="300px">
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            <h3> Contact</h3>
                                        </li>
                                        <li> PO Box 000, St Kilda, VIC 3182</li>
                                        <li> 0400000000</li>
                                        <li> alza@gmail.com </li>
                                        <li> Copyright 2018</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                    </div>
