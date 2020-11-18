<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php";
?>
        <!-- pages-title-start -->
		<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Наши товары</h2>
                            <p><a href="/">Главная</a> | товары</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- shop-style content section start -->
		<section class="pages products-page section-padding-top section-padding-bottom">
			<div class="container">
				<div class="row">
				    <div class="col-md-4 col-lg-3 col-sm-12">
                        <div class="all-shop-sidebar">
                            <div class="top-shop-sidebar">
                                <h3 class="wg-title">Поиск</h3>
                            </div>
                            <div class="shop-one">
                                <h3 class="wg-title2">Категории</h3>
                                <ul class="product-categories">
											  <!-- ВЫВОДИТЬ КАТЕГОРИИ  -->
                                    <li class="cat-item">
													 <a href="#">Рамки</a>
													 <!-- ПОСЧИТАТЬ СКОЛЬКО ВСЕГО РАМОК -->
                                        <span class="count">(10)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-one re-shop-one">
                                <h3 class="wg-title2">Choose Price</h3>
                                <div class="widget shop-filter">
                                    <div class="info_widget">
													<div class="price_filter">
                                            <div id="slider-range"></div>
                                            <div id="amount">
                                                <input type="text" name="first_price" class="first_price" />
                                                <input type="text" name="last_price" class="last_price"/>
                                                <button class="button-shop" type="submit"><i class="fa fa-search search-icon"></i></button>
                                            </div>
                                        </div>
                                    </div>							
                                </div>
									 </div>
                            <div class="top-shop-sidebar an-shop">
                                <h3 class="wg-title">НАИБОЛИЕ ПРОДАВАЕМЫЕ</h3>
                                <ul>
                                   <li class="b-none">
                                        <div class="tb-recent-thumbb">
                                            <a href="">
                                                <img class="attachment" src="/img/products/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tb-recentb">
                                            <div class="tb-beg">
                                                <a href="#">Lambskin Shoe</a>
                                            </div>
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount">$180.00</span>
                                            </div>
                                        </div>
                                    </li>
                                   <li class="b-none">
                                        <div class="tb-recent-thumbb">
                                            <a href="">
                                                <img class="attachment" src="/img/products/11.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tb-recentb">
                                            <div class="tb-beg">
                                                <a href="#">Luxury Leather Bag</a>
                                            </div>
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount2 ana">$170.00</span>
                                            </div>
                                        </div>
                                    </li>
                                   <li class="b-none agn">
                                        <div class="tb-recent-thumbb">
                                            <a href="">
                                                <img class="attachment" src="/img/products/12.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tb-recentb">
                                            <div class="tb-beg">
                                                <a href="#">Vintage Glasses</a>
                                            </div>
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount2 ana">$170.00</span>
                                            </div>
                                        </div>
                                    </li>
                               </ul>
                            </div>
                            <div class="ro-info-box-wrap tpl3 st">
                                <div class="tb-image">
                                    <img src="/img/products/2.jpg" alt="">
                                </div>
                                <div class="tb-content">
                                    <div class="tb-content-inner an-inner">
                                        <h5>СЮРПРИЗ БОКСЫ</h5>
                                        <h3>РАСПРОДАЖА К НОВОМУ ГОДУ</h3>
                                        <h6>
                                            <a href="#">КУПИТЬ</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="features-tab">
                                  <!-- Nav tabs -->
                                    <div class="shop-all-tab">
                                        <div class="two-part">
                                            <ul class="nav tabs" role="tablist">
                                                <li class="vali">Вид:</li>
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="re-shop">
                                           <div class="sort-by">
                                                <div class="shop6">
                                                    <label>Отсортировать по :</label>
                                                    <select>
                                                        <option value="">Default sorting</option>
                                                        <option value="">Sort by popularity</option>
                                                        <option value="">Sort by average rating</option>
                                                        <option value="">Sort by newness</option>
                                                        <option value="">Sort by price: low to high</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="shop5">
                                                <label>Отобразить :</label>
                                                <select>
                                                    <option value="">12</option>
                                                    <option value="">24</option>
                                                    <option value="">36</option>
                                                </select>      
                                            </div>
                                        </div>
                                    </div>
                                  <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="row">
                                                <div class="shop-tab">
																	<!-- ЗДЕСЬ ДОЛЖНО БЫТЬ 9 КАРТОЧЕК. ЗДЕЛАТЬ ЦИКЛ НА 9 ПРОДУКТОВ -->
																	<!-- ЭТО КАРТОЧКА ПРОДУКТА -->
                                                    <!-- single-product start -->
                                                    <div class="col-md-4 col-lg-4 col-sm-6">
																	 	<div class="single-product s-top s-bottom">
																			<?php
																				include $_SERVER["DOCUMENT_ROOT"] . "/parts/card.php"
																			?>
                                                    	</div>
                                                    </div>
                                                    <!-- single-product start -->
                                                </div>
                                            </div>
													 </div>
													<!-- отображение строками!!!!! -->
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                            <div class="row">
															  <!-- ШАБЛОН КАРТОЧКИ ВЫВОДИТЬ ТОЖЕ ЦИКЛОМ. ЗДЕСЬ БЫЛО 5 ШТУК -->
                                                <div class="li-item">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="tb-product-item-inner tb2 pct-last">
                                                            <div class="pro-type">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="re-img">
                                                                <a href="#"><img alt="" src="/img/products/1.jpg"></a>
                                                            </div>
                                                            <div class="actions-btn">
                                                                <a data-original-title="Quick View" data-toggle="modal" data-trigger="hover" data-target="#quick-view" data-placement="top" href="#">
                                                                <i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="f-fix">
                                                            <div class="tb-beg">
                                                                <a href="#">Vintage Shoulder Bag</a>
                                                            </div>
                                                            <div class="tb-product-wrap-price-rating">
                                                                <div class="tb-product-price font-noraure-3">
                                                                    <span class="amount2 ana">$79.00 - </span>
                                                                    <span class="amount2 ana">$100.00</span>
                                                                </div>
                                                            </div>
                                                            <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo  </p>
                                                            <div class="last-cart l-mrgn ns">
                                                                <a class="las4" href="#">Add To Cart</a>
                                                            </div>
                                                            <div class="tb-product-btn">
                                                                <a href="#">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>	
                                        </div>
                                    </div>
                                    <div class="shop-all-tab-cr shop-bottom">
													<!-- ПАГИНАЦИЯ -->
                                        <div class="two-part">
                                            <div class="shop5 page">
                                                <ul>
                                                    <li>
                                                        <a class="active" href="#">1</a>
                                                        <a href="#">2</a>
                                                        <a href="#">3</a>
                                                        <a href="#">4</a>
                                                        <a href="#">5</a>
                                                        <a href="#"><i class="fa fa-arrow-right"></i></a>
                                                    </li>
                                                </ul>        
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
		<!-- shop-style  content section end -->
		<!-- МОДАЛЬНОЕ ОКНО. МОЖЕТ УДАЛИТЬ -->
        <!-- quick view start -->
		  <?php
			include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/modal.php"
			?>
		<!-- quick view end -->
<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
?>
