<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php";
	include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php";
?>
	<!-- pages-title-start -->
<section class="contact-img-area">
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="con-text">
								<h2 class="page-title">Товар</h2>
								<p><a href="/">Главная</a> | <a href="/pages/shop.php">Магазин</a> | Товар </p>
						</div>
					</div>
				</div>
		</div>
	</section>
<!-- pages-title-end -->
<!-- single peoduct content section start -->
<?php 
$sql = "SELECT * FROM products WHERE id =". $_GET['productId'];
$result = $conn->query($sql); 
$row = mysqli_fetch_assoc($result);
?>
<section class="single-product-area sit section-padding-bottom">
		<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
								<div class="col-md-6 col-sm-6 none-si-pro">
									<div class="pro-img-tab-content tab-content">
										<div class="tab-pane active" id="image-1">
												<div class="simpleLens-big-image-container">
													<a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="/img/products/<?php echo $row['image'] ?>" href="/img/products/12.jpg">
														<img src="/img/products/<?php echo $row['image'] ?>" alt="" class="simpleLens-big-image">
													</a>
												</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="cras">
										<div class="product-name">
												<h2><?php echo $row['title'] ?></h2>
										</div>
										<div class="pro-rating cendo-pro">
												<div class="pro_one">
													<img src="/img/icon-img/stars-1.png" alt="">
												</div>
										</div>										
										<?php 
				// проверка ниличия товара на складе  1- на складе 0 - нет в наличии (в БД графа availability)
				if ($row['availability']== 1) {?> <p class="availability in-stock2">ТОВАР НА СКЛАДЕ (<span ><?php echo $row['count'] ?><p2> шт.</p2>)</span> </p> <?php
				} elseif ($row['availability']== 0) {?><p class="availability in-stock2"> ТОВАРА НЕТ В НАЛИЧИИ </p> <?php
				} 
				?>		
										
										<div class="short-description">
												<p><?php echo $row['description'] ?></p>
										</div>
										<div class="pre-box">
												<span class="special-price"><?php echo $row['price'] ?> грн.</span>
										</div>
										<div class="add-to-box1">
												<div class="add-to-box add-to-box2">
													<div class="add-to-cart">
														<div class="input-content">
																<label>Количество:</label>
																<div class="quantity">
																	<div class="cart-plus-minus">
																		<input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
																	</div>
																</div>
														</div>
														<div class="product-icon">
															<a class="add-to-cart" data-id="<?php echo $row["id"] ?>" data-toggle="tooltip" data-placement="top" title="В корзину" onclick="addCart(this)"><i class="fa fa-shopping-cart"></i></a>																
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>
						</div>
						
					</div>
				</div>
		</div>
	</section>
<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
?>