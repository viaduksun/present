<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/shopheader.php";
?>
        <!-- shopheader-start -->		
		<!-- shopheader-end -->
		<!-- shop-style content section start -->
		<section class="pages products-page section-padding-top section-padding-bottom">
			<div class="container">
				<div class="row">
<<<<<<< Updated upstream
                <!-- SIDEBAR START -->
				    <?php
                        include $_SERVER["DOCUMENT_ROOT"] . '/parts/shop/sidebar.php';
                     ?>
                    <!-- SIDEBAR END -->


=======
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
                                        <span class="count">(12)</span>
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
                                                <img class="attachment" src="/img/products/2.jpg" alt="">
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
                                                <img class="attachment" src="/img/products/3.jpg" alt="">
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
                                    <img src="/img/products/4.jpg" alt="">
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
>>>>>>> Stashed changes
                    <div class="col-md-8 col-lg-9 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="features-tab">
                                <!-- SHOP Nav tabs -->
                                  <?php
                                  include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/shop_nav_tab.php";
                                  ?>                                    
                                <!-- SHOP Nav tabs END -->
                                  <!-- MAIN SHOP CONTENT START-->

                                    <div class="tab-content"> 
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="row">
                                                <div class="shop-tab">
                                                    <!-- КАРТОЧКА ПРОДУКТА start -->
                                                    <?php 
                                                        // =========================
                                                        // Настройка пагинации
                                                        // =========================
                                                        if(!isset($_GET['page'])) $page = 1; else $page = $_GET['page'];

                                                        $count_query = $conn->query("SELECT COUNT(*) FROM products");
                                                        $count_array = $count_query->fetch_array(MYSQLI_NUM);
                                                        $count = $count_array[0];

                                                        $limit = 6;
                                                        $start = ($page*$limit)-$limit;
                                                        $length = ceil($count/$limit);
                                                        // echo $length;

                                                        $sql = "SELECT * FROM products ORDER BY id LIMIT $start, $limit";
                                                        $result = $conn->query($sql);
                                                        $p = 1;
                                                        
                                                        // =========================
                                                        // Окончание пагинации
                                                        // =========================
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                        include '../parts/shop/product_card.php';
                                                        }     
                                                           
                                                        ?>
                                                    <!-- КАРТОЧКА ПРОДУКТА end -->
                                                </div>
                                            </div>
										</div>
									<!-- отображение строками!!!!! START-->
                                     <?php
                                        include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/product_card_string.php"
                                    ?>                                       
                                    <!-- отображение строками!!!!! END-->
                                    </div>
                                    <!-- MAIN SHOP CONTENT END-->
                                    <!-- MAIN SHOP CONTENT FOOTER (pagination) START -->
                                    <div class="shop-all-tab-cr shop-bottom">
                                    <!-- ПАГИНАЦИЯ START-->


    <div class="two-part">
        <div class="shop5 page">

<nav>
    <ul class="pagination justify-content-center mt-4">
        <li class="page-item"><a class="page-link" href="shop.php?page=<?php if ($page>= 2) echo $page - 1; else echo $page ?>"><i class="fa fa-arrow-left"></i></a></li>
        <?php 
        if($length<=5) {foreach (range(1, $length) as $p) { ?>
       <li class="page-item <?php if($page == $p) { echo 'active';} ?> "> <a class="page-link" href="shop.php?page= <?php echo $p ?> "> <?php echo $p ?> </a> </li>
       <?php } };

       if($length>5 && $page < 5) {foreach (range(1, 5) as $p) { ?>
       <li class="page-item <?php if($page == $p) { echo 'active';} ?> "> <a class="page-link" href="shop.php?page= <?php echo $p ?> "> <?php echo $p ?> </a> </li>
       <?php } };

       if($length>5 && $page >= 5) {foreach (range($length - 4, $length) as $p) { ?>
       <li class="page-item <?php if($page == $p) { echo 'active';} ?> "> <a class="page-link" href="shop.php?page= <?php echo $p ?> "> <?php echo $p ?> </a> </li>
       <?php } };

         ?>       
        <li class="page-item "> <a class="page-link" href="shop.php?page=<?php if ($page <= $length-1) echo $page + 1; else echo $page ?>"><i class="fa fa-arrow-right"></i></a></li>
    </ul>
</nav>

            <!-- <ul>
                <li>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                </li>
            </ul>         -->
        </div>
    </div>
<!-- ПАГИНАЦИЯ END--> 
</div>
                                    <!-- MAIN SHOP CONTENT FOOTER (pagination) END -->
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
