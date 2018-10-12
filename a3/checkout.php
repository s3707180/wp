<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<?php
	include 'head.php' ;
	head_module('checkout');	?>

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
						
						<!-- pattern="[a-zA-Z0-9 ,'-\.]+" -->
                    <table>
						<tr><td> <label for="name"><i class="name"> Full Name&nbsp;&nbsp;</i></label></td>
                            <td colspan="2"><input type="text"  id="name" name="name"  placeholder="Mark Smith"   style="width:100%; height:20px" ></td></tr>
                         <tr><td><label for="email"><i class="eamil"></i> Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                             <td colspan="2"><input type="text" id="email" name="email" placeholder="mark@gmail.com" style="width:100%; height:20px" ></td></tr>
						 <tr><td> <label for="address"><i class="address"></i> Address&nbsp;&nbsp;&nbsp;</label></td>
                            <td colspan="2"> <textarea rows="5" cols="50" id="address" name="address" placeholder="24 Mcivor street"` ></textarea> </td></tr>


                           <tr><td> <label for="mobile"><i class="mobile"></i> Mobile Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                          <td colspan="2">  <input type="text" id="mobile" name="mobile" placeholder="+614..." style="width:100%; height:20px" ></td></tr>
                        <tr><td>    <label for="credit">Credit card&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                           <td> <input oninput="creditVisaLogoUpdate();" type="text" id="credit" name="credit" placeholder="Credit card number" style="width:100%; height:20px"></td><td><img id='visa_logo' src="images/visa.png" class="activeLogo"></td></tr>
                        <tr><td>  <label for="date">Expiry Date</label></td>
                           <td colspan="2"><input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="MM/YYYY" style="width:100%; height:20px" required></td></tr>
					
					</table>
					</form>
                    </div>
					
                    <?php include 'footer.php'?>
					
				</body>
			</html>
			