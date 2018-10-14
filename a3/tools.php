<?php

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}


function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}


function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME']; 
  $bits = explode('/',$here); 
  $filename = $bits[count($bits)-1]; 
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}

function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

function getOption($id, $products_array, $OID) {
	
	if ($products_array[$id]['OID1'] == $OID)
		return $products_array[$id]['option1'];
	else 
		return $products_array[$id]['option2'];
} 
 
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
	
		//check if the option id is valid. else will ignore
		if ($cartItem['option'] !== $products_array[(int)$id]['OID1']&& $cartItem['option'] !== $products_array[(int)$id]['OID2']){
			continue;
		}
		
		$order_arr['date']=$dateNow->format('Y-m-d H:i:s');
		$order_arr['name']=$_POST["name"];
		$order_arr['email']=$_POST["email"];
		$order_arr['mobile']=$_POST["mobile"];
		$order_arr['address']=$_POST["address"];
		$order_arr['id']=$cartItem['id'];
		$order_arr['option']=$cartItem['option'];
		$order_arr['qty']=$cartItem['qty'];
		$order_arr['price']=$products_array[(int)$cartItem['id']]['price'];
		$order_arr['subtotal']=$products_array[(int)$cartItem['id']]['price']*$cartItem['qty'];
		fputcsv($ordersFile, $order_arr, "\t");
		
//		fwrite($ordersFile,"\n".$dateNow->format('Y-m-d H:i:s')."\t".$_POST["name"]."\t".$_POST["email"]."\t".$_POST["mobile"]."\t".
//		$_POST["address"]."\t".$cartItem['id']."\t".$cartItem['option']."\t".$cartItem['qty']."\t".$products_array[(int)$cartItem['id']]['price']."\t".
//		$products_array[(int)$cartItem['id']]['price']*$cartItem['qty']);
	}
	fclose($ordersFile);
}

/* Loads the products.txt file into a 2 dimensional array and returns it*/

function getProductsArr() {
		$productsFile = fopen("products.txt", "r") or die("Unable to open file!");
		
		$index = 0;
		$lineNum = 0;
		//the first line is only headings so it is not part of products array
		$productsStr = fgetcsv ($productsFile, filesize("products.txt"),"\t");
		$productsStr = fgetcsv ($productsFile, filesize("products.txt"),"\t");
		while($productsStr!=false){
 
		if ($lineNum%2==0){
			$products_array[$index]['ID'] = $productsStr[0];
			$products_array[$index]['OID1'] = $productsStr[1];
			$products_array[$index]['name'] = $productsStr[2];
			$products_array[$index]['about'] = $productsStr[3];
			$products_array[$index]['option1'] = $productsStr[4];
			$products_array[$index]['price'] = $productsStr[5];
            $products_array[$index]['author'] = $productsStr[6];
            $products_array[$index]['image'] = $productsStr[7];
		}else {
				$products_array[$index]['OID2'] = $productsStr[1];
				$products_array[$index]['option2'] = $productsStr[4];
				$index++;
		}
			$lineNum++;
			$productsStr = fgetcsv ($productsFile, filesize("products.txt"),"\t");
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