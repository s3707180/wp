<?php 
function saveOrder() {
	$ordersFile = fopen("orders.txt", "a") or die("Unable to open file!");
	$dateNow = date_create('now');
	
	$products_array = getProductsArr();
	
	if(isset($_SESSION['cart_arr']))
	foreach ($_SESSION['cart_arr'] as $cartItem)  {
		//check if the id is valid
		$id = $cartItem['id'];
		if (!isset($products_array[(int)$id])) {
			continue;
		}
	
		//check if the id is valid
		if ($cartItem['option'] !== "softcover" && $cartItem['option'] !== "hardcover") {
			continue;
		}
		
		fwrite($ordersFile,"\n".$dateNow->format('Y-m-d H:i:s')."\t".$_POST["name"]."\t".$_POST["email"]."\t".$_POST["mobile"]."\t".
		$_POST["address"]."\t".$cartItem['id']."\t".$cartItem['option']."\t".$cartItem['qty']."\t".$products_array[(int)$cartItem['id']]['price']."\t".
		$products_array[(int)$cartItem['id']]['price']*$cartItem['qty']);
	}
	fclose($ordersFile);
}

function getLastOrderId() {
	$ordersFile = fopen("orders.txt", "r") or die("Unable to open file!");
		$ordersStr = fread($ordersFile, filesize("orders.txt"));
		fclose($ordersFile);

		$ordersLineArr=explode("\n",$ordersStr);
		$line= $ordersLineArr[sizeof($ordersLineArr)-1];
		
		$tmpArr = explode("\t", $line);
		$lastOrderId = $tmpArr[6];
		return $lastOrderId;
}

function getProductsArr() {
$productsFile = fopen("products.txt", "r") or die("Unable to open file!");
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
		return $products_array;
	}
	
function checkoutValidation() {
		$_SESSION['chkDetails']['name'] = $_POST["name"];
		$_SESSION['chkDetails']['email'] = $_POST["email"];
		$_SESSION['chkDetails']['address'] = $_POST["address"];
		$_SESSION['chkDetails']['mobile'] = $_POST["mobile"];

			$isError = false;
			if (!isset($_POST["name"]) || !preg_match("/^[a-zA-Z ,'-\.]+$/",$_POST["name"])) {
				$isError = true;
				$errName = "Please enter a valid Name.";
			}
			if (!isset($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$isError = true;
				$errEmail = "Please enter a valid Email address. ";	
			}				
			if (!isset($_POST["address"]) || !preg_match("#^[a-zA-Z0-9 ,'-\./]+$#",$_POST["address"])) {
				$isError = true;
				$errAddress = "Please enter a valid Address.";
			}
			if (!isset($_POST["mobile"]) || !preg_match("/^(\+614|04|\(04\))[0-9]{8}$/",$_POST["mobile"])) {
				$isError = true;
				$errMobile = "Please enter a valid Mobile number.";
			}
			if (!isset($_POST["credit"]) || !preg_match("/^[0-9 ]{12,19}$/",$_POST["credit"])) {
				Echo "Error Credit";
				$isError = true;
				$errCredit = "Please enter a valid Credit Card number.";
			}

			if (!isset($_POST["date"])) {
				Echo "Error date";
				$isError = true;
				$errDate = "Please enter a valid expiry date.";
			} 
			else {
			//Echo "<BR>".$_POST["date"];
			$date = date_create($_POST["date"]);
			$dateNow = date_create('now');
			$dateNow->setTime(0, 0);
			//echo "<BR>".$date->format('Y-m-d H:i:s');
			//echo "<BR>".$dateNow->format('Y-m-d H:i:s');
			$diff=date_diff($dateNow,$date);
			//echo "<BR>".$diff->format("%R%a");
			if ($diff->format("%R%a") < 28) {
				Echo "Error date";
				$isError = true;
				$errDate = "Please enter a valid expiry date.";
			}
			}
	
	if ($isError) {
		header("Location: checkout.php?errName=$errName&errEmail=$errEmail&errAddress=$errAddress&errMobile=$errMobile&errCredit=$errCredit&errDate=$errDate");
		exit;
	}
}
?>