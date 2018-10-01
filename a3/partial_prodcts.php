<!--THE BOOKS-->
						<h2>Recently Published</h2>

						<?php 
						foreach($products_array as $product) {
							echo '<div class="bookInfo">';

							echo "<a href=\"products.php?id={$product['ID']}\">";
							
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