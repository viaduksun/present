<!-- ЭТО КАРТОЧКА КОРЗИНЫ -->
<?php
	if(isset($_COOKIE['basket']) || isset($new)){
		if(isset($new)){
			$basket = json_decode($new, true);
		} else {
			$basket = json_decode($_COOKIE['basket'], true);
		}
		$sum = 0;
		for ($i = 0; $i < count($basket['basket']); $i += 1){
			$productSql = "SELECT * FROM products WHERE id = " . $basket['basket'][$i]['product_id'];
			$productResult = $conn->query($productSql);
			$product = mysqli_fetch_assoc($productResult);
			$sum += $product['price']*$basket['basket'][$i]['quant'];
		?>
		<li>
			<a href="/pages/cart.php" style="max-width: 70px;"><img src="/img/products/<?php echo $product["image"] ?>" alt="" /></a>
			<div class="add-cart-text">
					<p><a href="#"><?php echo $product["title"] ?></a></p>
					<p>
						<span><?php echo $basket['basket'][$i]["quant"] ?> × </span>
						<span class="all-sum"><?php echo ($product["price"]) ?></span>
						<span class="all-sum">= <?php echo ($product["price"]*$basket['basket'][$i]['quant']) ?></span>
					</p>
			</div>
		</li>
		<?php
		}
		?>
		<!-- ЭТО КАРТОЧКА КОРЗИНЫ -->
		<li class="total-amount clearfix">
				<span class="floatleft">total = </span>
				<span class="floatright"><strong class="all-sum sum"><?php echo $sum; ?></strong></span>
		</li>
		<li class="checkout-btn text-center">
			<div class="goto text-center">
				<a href="/pages/cart.php"><strong>go to cart &nbsp;<i class="pe-7s-angle-right"></i></strong></a>
			</div>
		</li>
<?php
	}else{
?>
		<p>Ваша корзина пуста.</p>
<?php
	}
?>