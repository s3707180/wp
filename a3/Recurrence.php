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

<?php include 'single_partial product.php'?>
						</div> 
						<?php include 'footer.php'?>
					</body>
				</html>
				