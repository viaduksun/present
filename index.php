<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php"
?>

	<!-- slider-section-start -->
	<section class="slider-main-area">
		<div class="main-slider an-si">
				<div class="bend niceties preview-2 hm-ver-1">
					<div id="ensign-nivoslider-2" class="slides">	
						<img src="/img/slider/3.jpg" alt="" title="#slider-direction-3"  />
						<img src="/img/slider/4.jpg" alt="" title="#slider-direction-1"  />
					</div>
					<!-- direction 1 -->
					<div id="slider-direction-3" class="t-cn slider-direction Builder">
						<div class="slide-all">
								<!-- layer 1 -->
								<div class="layer-1">
									<h2 class="title5">новые виды товаров</h2>
								</div>
								<!-- layer 2 -->
								<div class="layer-2">
									<h2 class="title6">Подарки на любой вкус</h2>
								</div>
								<!-- layer 2 -->
								<div class="layer-2">
									<p class="title0">сэкономьте до 40%</p>
								</div>
								<!-- layer 3 -->
								<div class="layer-3">
									<a class="min1" href="/pages/shop.php">Товары</a>
								</div>
						</div>
					</div>
					<div id="slider-direction-1" class="t-cn slider-direction Builder">
						<div class="slide-all slide2">
								<!-- layer 1 -->
								<div class="layer-1">
									<h2 class="title5">горячие новинки</h2>
								</div>
								<!-- layer 2 -->
								<div class="layer-2">
									<h2 class="title6">Подарки для близких</h2>
								</div>
								<!-- layer 2 -->
								<div class="layer-2">
									<p class="title0">Лучшая цена на рынке</p>
								</div>
								<!-- layer 3 -->
								<div class="layer-3">
									<a class="min1" href="/pages/shop.php">Заказать</a>
								</div>
						</div>
					</div>
			</div>
		</div>
	</section>
<!-- slider section end -->
<!-- collection section start -->
<div class="banner-area">
            <div class="container">
                <div class="section-padding1">
					 	<div class="row">
							<div class="col-xs-12">
								<div class="section-title">
									<h3>Категории</h3>
									<div class="section-icon">
										<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="banner-container banner-box res-btm">
                                <a href="#" >
                                    <img alt="" src="/img/products/46.jpg">
                                    <div>
                                        <h2>
                                            Cамые вкусные!
                                        </h2>
                                        <p>Фруктовые боксы. Самые свежие фрукты!</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="banner-box banner-box-re">
                                <a href="#" class="link-height">
                                    <img alt="" src="/img/products/11.jpg" class="image-center">
                                    <div>
                                        <h2>
                                            Качественные!
                                        </h2>
                                        <p>Боксы косметики. Вы оценете!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="banner-box res-btm">
                                <a href="#" class="link-height">
                                    <img alt="" src="/img/products/22.jpg" class="image-center">
                                    <div>
                                        <h2>
                                            Оригинальные и вкусные
                                        </h2>
                                        <p>Sweet boxes!</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="banner-box banner-box-re">
                                <a href="#" class="link-height">
                                    <img alt="" src="/img/products/33.jpg" class="image-center">
                                    <div>
                                        <h2>
                                            Порадуйте вашего ребенка с
                                        </h2>
                                        <p>Сюрприз боксом для детей!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="banner-box">
                                <a href="#" class="link-height">
                                    <img alt="" src="/img/products/54.jpg" class="image-center">
                                    <div>
                                        <h2>
                                            Только у нас
                                        </h2>
                                        <p>Самые оригинальные флористы составляют flower boxes!</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- collection section end -->
	<!-- new-products section start -->
<section class="featured-products single-products section-padding-top section-padding-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title">
					<h3>Рекомендованные товары</h3>
					<div class="section-icon">
						<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="product-tab nav nav-tabs">
					<ul>                                        
						<li class="active"><a data-toggle="tab" href="#all">все</a></li>
						<li><a data-toggle="tab" href="#clothings">рамки</a></li>
						<li><a data-toggle="tab" href="#shoes">картины</a></li>
						<li><a data-toggle="tab" href="#bags">пазлы</a></li>
						<li><a data-toggle="tab" href="#accessories">магниты</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row tab-content">
			<div class="tab-pane  fade in active" id="all">
				<div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme">
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->	
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->
				</div>
			</div>
			<!-- all shop product end -->

			<div class="tab-pane  fade in" id="clothings">
				<div id="tab-carousel-2" class="owl-carousel product-slider owl-theme">
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->	
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->
					<!-- single product end -->
				</div>
			</div>
			<!-- clothings product end -->
			<div class="tab-pane  fade in" id="shoes">
				<div id="tab-carousel-3" class="owl-carousel product-slider owl-theme">
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->	
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->
					<!-- single product end -->
				</div>
			</div>
			<!-- shoes product end -->
			<div class="tab-pane  fade in" id="bags">
				<div id="tab-carousel-4" class="owl-carousel product-slider owl-theme">
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->	
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->
					<!-- single product end -->
				</div>
			</div>
			<!-- bags product end -->
			<div class="tab-pane  fade in" id="accessories">
				<div id="tab-carousel-5" class="owl-carousel product-slider owl-theme">
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->	
					<div class="col-xs-12">	
						<div class="single-product">
							<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
							?>
						</div>
					</div>
					<!-- ТАКИХ КАРТОЧЕК НУЖНО 5 ШТУК -->
				</div>
			</div>
			<!-- accessories product end -->
		</div>
	</div>
</section>
<!-- new-products section end -->
	<!-- testimonials section start -->
<section class="testimonials stripe-parallax-bg" data-parallax-speed="0.5">
	<div class="re-testimonials re-testimonials2">
				<div class="container">
					<div class="row">
						<div class="re-testimonials-all re-owl-carousel2">
								<!-- КАРТОЧКА СЛАЙДЕРА. 2 ШТУКИ МИНИМУМ -->
							<div class="re-testimonials-all-slider">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="sale-curosel1">
											<div class="product-img">
												<div class="pro-type">
													<span>sale</span>
												</div>
												<a href="#">
													<img alt="Product Title" src="/img/products/2.jpg">
												</a>
											</div>
									</div>
								</div>
								<div class="col-md-8 col-sm-12 col-xs-12">
									<div class="product-content">
											<div class="re-text">
												<h5><a href="#">Etiam molestie</a></h5>
											</div>
											<div class="pro-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<!-- <a href="#"><i class="fa fa-star-o"></i></a> -->
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
											<span class="old-price">230.00 ГРН</span>
											<span class="pro-price">200. ГРН</span>
											<div class="timer">
												<div data-countdown="2020/12/12"></div>
											</div>														
									</div>
								</div>
							</div>
								<!-- КАРТОЧКА СЛАЙДЕРА. 2 ШТУКИ МИНИМУМ -->
						</div>
					</div>
				</div>
	</div>
</section>
<!-- testimonials section end -->

<!-- brand section start -->
<section>
	<div class="brand-logo">
		<div class="barnd-bg">
			<div class="container">
				<div class="row text-center">
					<div class="section-title">
						<h3>МЫ СОТРУДНИЧАЕМ</h3>
						<div class="section-icon">
							<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
						</div>
					</div>
					<div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/1.png" alt="" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/2.jpg" alt="" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/3.jpg" alt="" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/4.png" alt="" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/5.jpg" alt="" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/6.jpg" alt="" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/7.jpg" alt="" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<img src="/img/brand/8.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- brand section end -->

	<!-- testimonials section start -->
<section class="testimonials stripe-parallax-bg" data-parallax-speed="0.5">
	<div class="re-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
						<div class="section-title re-section-title">
							<h3>ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h3>
							<div class="section-icon re-section1">
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							</div>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-text-center text-center">
						<div id="testimonials" class="re-owl-carousel2 owl-carousel product-slider owl-theme">
							<div class="single-testimonial">
								<div class="testimonial-dsc">
										<p>Заказывал подарок для своей девушки, она осталась очень довольна, бокс как и подарки в нем отличного качества.
									Классный проект, желаю вам процветания и побольше заказов!</p>
								</div>
								<div class="testimonial-img">
										<a href="#"><img src="/img/testimonial/01.jpg" alt="Title" /></a>
										<h4><a href="#">Валерий Крещенко</a></h4>
										<span>Бокс косметики</span>
								</div>
							</div>
							<!-- single testimonial item end -->
							<div class="single-testimonial">
								<div class="testimonial-dsc">
										<p>Замовляла дитині футболку "Странные вещи". Дуже привітний менеджер спілкувався. Обслуговування на вищому рівні. Дякуємо разом з донечкою!!! Успіхів ВАм та побільше вдячних клієнтів. Будемо замовляти ще. P.S. якби у всіх магазинах так обслуговували.</p>
								</div>
								<div class="testimonial-img">
										<a href="#"><img src="/img/testimonial/02.jpg" alt="Title" /></a>
										<h4><a href="#">Анастастия Панова</a></h4>
										<span>Подарок для ребенка</span>
								</div>
							</div>
							<!-- single testimonial item end -->
							<div class="single-testimonial">
								<div class="testimonial-dsc">
										<p>Заказывала бокс Гарри Поттера для дочки, это просто бомбический подарок!!! Ребёнок остался в лёгком шоке от этой красоты, упаковка наполнение, волшебная палочка)) Спасибо большое ребятам, за классные идеи для подарков, вы лучшие!</p>
								</div>
								<div class="testimonial-img">
										<a href="#"><img src="/img/testimonial/3.png" alt="Title" /></a>
										<h4><a href="#">Михаил Мономаков</a></h4>
										<span>Новогодний подарок</span>
								</div>
							</div>
							<!-- single testimonial item end -->
						</div>
				</div>
			</div>
		</div>	
	</div>
</section>
	<!-- testimonials section end -->
	<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/modal.php"
?>
<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
?>