<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gift-Hub</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="shortcut icon" type="image/x-icon" href="/img/logo2.png">

				<!-- HelloPreload http://hello-site.ru/preloader/ -->
				<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #BE90D4 url(http://hello-site.ru//main/images/preloads/hearts.svg) center center no-repeat;background-size:180px;}</style>
					<div id="hellopreloader"><div id="hellopreloader_preload"></div></div>
					<script type="text/javascript">
					var hellopreloader = document.getElementById("hellopreloader_preload");
					function fadeOutnojquery(el){
							el.style.opacity = 1;
							var interhellopreloader = setInterval(function(){
								el.style.opacity = el.style.opacity - 0.05;
								if (el.style.opacity <=0.05){ 
									clearInterval(interhellopreloader)
									;hellopreloader.style.display = "none";}
								},16);}
								window.onload = function(){setTimeout(function(){
										fadeOutnojquery(hellopreloader);
								},0);
					};
        </script>
        <!-- HelloPreload http://hello-site.ru/preloader/ -->

		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
		<!-- animate css -->
  	<link rel="stylesheet" href="/css/animate.css">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="/css/pe-icon-7-stroke.min.css">
		<!-- jquery-ui.min css -->
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <!-- Image Zoom CSS
		============================================ -->
    <link rel="stylesheet" href="/css/img-zoom/jquery.simpleLens.css">
		<!-- meanmenu css -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="/lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="/lib/css/preview.css" type="text/css" media="screen" />
		<!-- owl.carousel css -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
		<!-- font-awesome css -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="/css/style.css">
		<!-- responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
		<!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/js/script.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<header>
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-4">
							<div class="left-header clearfix">
								<ul>
									<li><p><i class="fa fa-phone" aria-hidden="true"></i>(+380) 93 561 12 15</p></li>
									<li class="hd-none"><p><i class="fa fa-clock-o" aria-hidden="true"></i>Пн - Пт : 9:00-19:00</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-8">
							<div class="right-header">
								<ul>
									<li><a href="/pages/my-account.php"><i class="fa fa-user"></i>Моя страница</a></li>
									<li><a href="/pages/cart.php"><i class="fa fa-shopping-cart"></i>Корзина</a></li>
									<li><a href="/pages/login.php"><i class="fa fa-lock"></i>Войти</a></li>
									<li><a href="/"><i class="fa fa-lock"></i>Выйти</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom header-bottom-one" id="sticky-menu">
				<div class="container relative">
					<div class="row">
						<div class="col-sm-2 col-md-2 col-xs-4">
							<div class="logo">
								<a href="/"><img src="/img/logo2.png" alt="" style="height: 64px;"/></a>
							</div>
						</div>
						<div class="col-sm-10 col-md-10 col-xs-8 static">
							<div class="all-manu-area">
								<div class="mainmenu clearfix hidden-sm hidden-xs">
									<nav>
										<ul>
											<li><a href="/">Главная</a></li>
											<li><a href="/pages/shop.php">Магазин</a></li>
											<li><a href="/pages/about-us.php">Про нас</a></li>
											<li><a href="/pages/contact.php">Контакты</a></li>
										</ul>
									</nav>
								</div>
								<!-- mobile menu start -->
								<div class="mobile-menu-area hidden-lg hidden-md">
									<div class="mobile-menu">
										<nav id="dropdown">
											<ul>
												<li><a href="/">Главная</a></li>
												<li><a href="/pages/shop.php">Магазин</a></li>
												<li><a href="/pages/about-us.php">Про нас</a></li>
												<li><a href="/pages/contact.php">Контакты</a></li>
											</ul>
										</nav>
									</div>
								</div>
								<!-- mobile menu end -->
								<div class="right-header re-right-header">
										<ul>
											<?php
												include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php";
												$count = 0;
												if (isset($_COOKIE['basket'])) {
													$basket = json_decode($_COOKIE['basket'], true);
													for ($i = 0; $i < count($basket['basket']); $i += 1) {
														$count += $basket['basket'][$i]['quant'];
													}
												}
											?>
											<li><a href="/pages/cart.php"><i class="fa fa-shopping-cart"></i><span class="color1 quantity-cart"><?php echo $count ?></span></a>
												<ul class="drop-cart">
													<?php
														include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/drop-cart.php";
													?>
												</ul>
											</li>
										</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
<!-- header section end -->