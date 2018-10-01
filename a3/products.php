<?php $productsFile = fopen("products.txt", "r") or die("Unable to open file!");
		$productsStr = fread($productsFile, filesize("products.txt"));
		fclose($productsFile);
		//echo $productsStr;
		$productsLineArr=explode("\n",$productsStr);
		# echo nl2br(print_r( $productsLineArr,true));
		$index=-1;
		#$products_array;
		foreach($productsLineArr as $line)
		{
		if ($index == -1) {
			$index++;
			continue;
		} 
		$tmpArr = explode("\t", $line);
		$products_array[$index]['name'] = $tmpArr[0];
		$products_array[$index]['price'] = $tmpArr[1];
		$products_array[$index]['author'] = $tmpArr[2];
		$products_array[$index]['image'] = $tmpArr[3];

		$index++;
		}

		
 ?>
 
 <?php print_r ($products_array); 
	echo "------------ ".$products_array[0]['name'];
 ?>

<!DOCTYPE HTML>
<html>
	<?php include 'head.php' ;
	head_module('Product');	?>
	

		<body>
			<?php include 'header.php'?>

				<div class="mainContainer">
					<div class="fullLightGreyBox">


						<!--THE BOOKS-->
						<h2>Recently Published</h2>

						<?php 
						foreach($products_array as $product) {
							echo '<div class="bookInfo">';

							echo '<a href="Recurrence.php">';
							
							echo "<h4>{$product['author']}: {$product['name']} </h4>";
							echo "<img src=\"images/{$product['image']}\"".' height="300px" width="200"  alt="book cover" />';
							echo '</a>';
							echo '<ul>';
						//	echo '	<li>ISBN: 978-0-9808523-7-0</li>';
						//	echo '	<li>61pp. pbk</li>';
							echo "	<li>RRP: \${$product['price']}</li>";
							echo '</ul>';
							echo '</div>';
						}
						?>
						
						<div class="clear"/>

						<hr/>
					</div>
				</div>

				<?php include 'footer.php'?>

				</body>
			</html>
			