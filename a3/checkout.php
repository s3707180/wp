<?php
session_start();

/*
echo $_SESSION['chkDetails'];
echo $chkDetails['name'];
if (isset($_SESSION['chkDetails'])) {
	$chkDetails = $_SESSION['chkDetails'];
	$name = isset($chkDetails['name']) ? $chkDetails['name'] : "";
	$email = isset($chkDetails['email']) ? $chkDetails['email'] : "";	
	$address = isset($chkDetails['address']) ? $chkDetails['address'] : "";	
	$mobile = isset($chkDetails['mobile']) ? $chkDetails['mobile'] : "";	
} else {
	$name = "";
	$email = "";
	$address = "";
	$mobile = "";
}
*/
	if (!isset($_SESSION['cart_arr'])) {
		header("Location: cart.php?err=Cannot checkout. Cart is empty.");
	}

?>
<!DOCTYPE HTML>
<html>

<?php
	include 'head.php' ;
	head_module('checkout');
?>

<body>
	<?php include 'header.php'?>
            <div class="mainContainer">
                <div class="fullLightGreyBox">
				<form method="POST" action="Receipt.php">
                    <a href="products.php"><button class="button"><span> 🛒 Back Shopping </span></button></a>
                    <button class="button" ><span>💰Submit </span></button>
                    <!-- Title -->
                    <div class="hed">

                        <h2>Checkout</h2>
                        <h3>Your details</h3>
<!--header("Location: checkout.php?errName=$errName&errEmail=$errEmail&errAddress=$errAddress&errMobile=$errMobile&errCredit=$errCredit&errDate=$errDate"); -->
						
						<!-- pattern="[a-zA-Z0-9 ,'-\.]+" -->
                    <table>
						<tr><td> <label for="name"><i class="name"> Full Name&nbsp;&nbsp;</i></label></td>
                            <td colspan="2"><input type="text"  id="name" name="name" placeholder="Mark Smith"   style="width:100%; height:20px" required /></td>
							<td class="errMsg"> <?php if (isset($_GET['errName'])) echo $_GET['errN']; ?></td>
						</tr>
                         <tr><td><label for="email"><i class="eamil"></i> Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                             <td colspan="2"><input type="text" id="email" name="email" placeholder="mark@gmail.com" style="width:100%; height:20px" required /></td>
							 <td class="errMsg"> <?php if (isset($_GET['errEmail'])) echo $_GET['errEmail']; ?></td>
						</tr>
						 <tr><td> <label for="address"><i class="address"></i> Address&nbsp;&nbsp;&nbsp;</label></td>
                            <td colspan="2"> <textarea rows="5" cols="50" id="address" name="address" placeholder="24 Mcivor street" required /></textarea> </td>
							<td class="errMsg"> <?php if (isset($_GET['errAddress'])) echo $_GET['errAddress']; ?></td>
						</tr>
                           <tr><td> <label for="mobile"><i class="mobile"></i> Mobile Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                          <td colspan="2">  <input type="text" id="mobile" name="mobile" placeholder="+614..." style="width:100%; height:20px" required ></td>
						  <td class="errMsg"> <?php if (isset($_GET['errMobile'])) echo $_GET['errMobile']; ?></td>
						</tr>
                        <tr><td>    <label for="credit">Credit card&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                           <td> <input oninput="creditVisaLogoUpdate();" type="text" id="credit" name="credit" placeholder="Credit card number" style="width:100%; height:20px" required></td><td><img id='visa_logo' src="images/visa.png" class="activeLogo"></td>
						   <td class="errMsg"> <?php if (isset($_GET['errCredit'])) echo $_GET['errCredit']; ?></td>
						</tr>
                        <tr><td>  <label for="date">Expiry Date</label></td>
                           <td colspan="2"><input type="date" id="date" name="date" placeholder="MM/YYYY" style="width:100%; height:20px" required></td>
						   <td class="errMsg"> <?php if (isset($_GET['errDate'])) echo $_GET['errDate']; ?></td>
						</tr>
					
					</table>
					</form>
                    </div>
					
                    <?php include 'footer.php'?>
					
				</body>
			</html>
			