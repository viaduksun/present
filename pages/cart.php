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
								<h2 class="page-title">Корзина</h2>
								<p><a href="/">Главная</a> | Корзина</p>
						</div>
					</div>
				</div>
		</div>
</section>
<!-- pages-title-end -->
<!-- checkout content section start -->
	<div class="checkout-area section-padding-bottom">
		<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="coupon-accordion">
								<h3>Вы уже зарегестрированы?  <span id="showcoupon3">Нажмите здесь чтобы войти</span></h3>
								<div id="checkout_coupon3" class="coupon-checkout-content tnm">
									<p>Если вы совершали у нас покупки раньше, введите свои данные в поля ниже.</p>
									<div class="coupon-info top1">
										<form action="#">
												<p class="checkout-coupon top">
													<label class="l-contact">
														Логин (почта) 
														<em>*</em>
													</label>
													<input type="email" />
												</p>
												<p class="checkout-coupon top-down">
													<label class="l-contact">
														Пароль
														<em>*</em>
													</label>
													<input type="password" />
												</p>
												<div class="cop-left">
													<input type="submit" value="Войти" />
												</div>
										</form>
									</div>
								</div>
						</div>
					</div>
				</div>
				<?php
					if (isset($_COOKIE['basket'])) {
						$basket = json_decode($_COOKIE['basket'], true);
						?>
						
				<div class="row">
					<div class="col-md-12">
						<div class="coupon-accordion res">
								<h3>Хотите посмотерть всю корзину? <span id="showcoupon">Нажмите здесь, чтобы посмотреть товары</span></h3>
								<!-- tnm -->
								<div id="checkout_coupon" class="coupon-checkout-content">
									<!-- wishlist content section start -->
								<div class="shopping-cart-area">
										<div class="container-fluid">
											<div class="row">
												<div class="col-md-11 col-xs-11 my-table">
														<div class="s-cart-all">
															<div class="cart-form table-responsive">
																<table id="shopping-cart-table" class="data-table cart-table">
																		<tr>
																			<th class="low1"></th>
																			<th>Фото</th>
																			<th class="low2">Название</th>
																			<th>Количество</th>
																			<th>Цена</th>
																			<th>Сумма</th>
																		</tr>
																		<!-- это карточки -->
																		<?php
																			for ($i = 0; $i < count($basket['basket']); $i += 1){
																				$productSql = "SELECT * FROM products WHERE id = " . $basket['basket'][$i]['product_id'];
																				$productResult = $conn->query($productSql);
																				$product = mysqli_fetch_assoc($productResult);
																				?>
																			<tr>
																				<td class="sop-icon1">
																					<a onclick="deleteItem(this, <?php echo $product['id'] . ', ' . $basket['basket'][$i]['quant']; ?>)">
																							<i class="fa fa-times"></i>
																					</a>
																				</td>
																				<td class="sop-cart">
																					<a href="#"><img class="primary-image" alt="" src="/img/products/<?php echo $product["image"] ?>"></a>
																				</td>
																				<td class="sop-cart">
																					<div class="tb-beg">
																							<a href="#"><?php echo $product["title"] ?></a>
																					</div>
																				</td>
																				<td class="sop-cart">
																					<div class="tb-product-price font-noraure-3">
																						<input class="change-quant" data-id="<?php echo $product["id"] ?>" data-price="<?php echo $product["price"] ?>" type="number" min="0" max="15" value="<?php echo $basket['basket'][$i]['quant'] ?>">
																					</div>
																				</td>
																				<td class="cen">
																					<div class="tb-product-price font-noraure-3">
																							<span class="amount"><?php echo $product["price"] ?></span> грн.
																					</div>
																				</td>
																				<td class="cen">
																					<div class="tb-product-price font-noraure-3">
																							<span class="amount all-sum result-sum"><?php echo ($product["price"]*$basket['basket'][$i]['quant']) ?></span>
																					</div>
																				</td>
																			</tr>
																				<?php
																			}
																		?>
																		
																		<!-- это карточки -->
																		<tr>
																			<th class="low1">Сумма</th>
																			<th></th>
																			<th class="low2"></th>
																			<th class="all-quant"></th>
																			<th></th>
																			<th class="all-sum sum"></th>
																		</tr>
																</table>
															</div>
														</div>
												</div>
											</div>
										</div>
								</div>
								<!-- wishlist  content section end -->
								</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7 col-sm-12">
						<div class="text">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="home">
										<div class="row">
												<form method="POST" action="/modules/cart/order.php">
													<div class="checkbox-form">
														<div class="col-md-12">
															<h3 class="checkbox9">Детали покупки</h3>
														</div>
														<div class="col-md-12">
															<div class="di-na bs">
																<label class="l-contact">
																ФИО
																<em>*</em>
																</label>
																<input class="form-control" type="text" required="" name="name" pattern="^[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+\s+[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+\s+[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+$" placeholder="ФИО"> 
															</div>
														</div>
														<div class="col-md-6">
															<div class="di-na bs">
																<label class="l-contact">
																Адресс електроной почты 
																<em>*</em>
																</label>
																<input class="form-control" name="email" type='email' title='email' required pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}' placeholder="email@em.ru"/>
															</div>
														</div>
														<div class="col-md-6">
															<div class="di-na bs">
																<label class="l-contact">
																Моб. телефон 
																<em>*</em>
																</label>
																<input class="form-control" name="phone" type='phone' required pattern='(?[- .]*){7,13}' title='Введите номер телефона в международном, национальном или локальном формате' placeholder="+380935858328"/>
															</div>
														</div>
														<div class="col-md-12">
															<label class="l-contact">
																Адрес новой почты  
																<em>*</em>
															</label>
															<div class="di-na bs">
																<input class="form-control" type="text" required="" name="address"  placeholder="Street address">
															</div>
														</div>
														<div class="col-md-12">
															<div class="di-na bs">
																<label class="l-contact">
																		Order Notes
																</label>
																<textarea class="input-text" name="details" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
															</div>
														</div>
														<div class="col-md-12 text-center">
															<p class="checkout-coupon">
																<input type="submit" name="order" value="CONTINUE">
															</p>
														</div>
													</div>
												</form>
										</div>
									</div>
								</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-12">
						<div class="ro-checkout-summary cart-card">
								<div class="ro-title">
									<h3 class="checkbox9 my-margin-bottom-0">ВАШ ЗАКАЗ</h3>
								</div>
								<!-- ЭТО КАРТОЧКА ТАКИХ БУДЕТ КАК В КУКИ -->
								<?php
									for ($i = 0; $i < count($basket['basket']); $i += 1){
										$productSql = "SELECT * FROM products WHERE id = " . $basket['basket'][$i]['product_id'];
										$productResult = $conn->query($productSql);
										$product = mysqli_fetch_assoc($productResult);
								?>
								<div class="ro-body">
									<div class="ro-item">
										<div class="ro-image">
												<a href="#">
													<img src="/img/products/<?php echo $product["image"] ?>" alt="">
												</a>
										</div>
										<div>
												<div class="tb-beg">
													<a href="#"><?php echo $product["title"] ?></a>
												</div>
										</div>
										<div>
												<div class="ro-price">
													<span class="amount all-sum"><?php echo ($product["price"]) ?></span>
												</div>
												<div class="ro-quantity">
													<strong class="product-quantity">× <?php echo $basket['basket'][$i]['quant'] ?></strong>
												</div>
												<div class="product-total">
													<span class="amount all-sum"><?php echo ($product["price"]*$basket['basket'][$i]['quant']) ?></span>
												</div>
										</div>
									</div>
								</div>
								<?php
									}
								?>
								<!-- ЭТО КАРТОЧКА ТАКИХ БУДЕТ КАК В КУКИ -->
								<div class="ro-footer">
									<div class="ro-title order-total">
										<p>
											Общая стоимость:
											<span>
												<strong>
													<span class="amount all-sum sum">99.00</span>
												</strong>
											</span>
										</p>
									</div>
								</div>
						</div>
					</div>
				</div>
				<?php
					} else {
						?>
						<h3 class="page-title" style="color: #000; text-align:center;">Ваша корзина пуста</h3>
					<?php
					}
				?>
		</div>
	</div>
<!-- checkout  content section end -->
	<!-- МОДАЛЬНОЕ ОКНО. МОЖЕТ УДАЛИТЬ -->
	<!-- quick view start -->
	<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/modal.php"
	?>
<!-- quick view end -->
<script src="/js/script.js"></script>
<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
?>