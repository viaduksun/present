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

                <!-- SIDEBAR START -->
				    <?php
                        include $_SERVER["DOCUMENT_ROOT"] . '/parts/shop/sidebar.php';
                     ?>
                    <!-- SIDEBAR END -->
				    
                    <div class="col-md-8 col-lg-9 col-sm-12" id="shop_place_for_cards"> <!-- Этот див используется в AJAX для замены его содержимого -->
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
                                                <!-- В этот ДИВ помещаем AJAX response после сработки функции function categorySelect(category) -->
                                                <div class="shop-tab" >
                                                    <!-- КАРТОЧКА ПРОДУКТА start -->
                                                    <?php 
                                                        // =========================
                                                        // Настройка пагинации
                                                        // =========================
                                                        if(!isset($_GET['page'])) $page = 1; else $page = $_GET['page'];                                                        
                                                        // echo $length;
                                                        // ==================================================
                                                        if (isset($_COOKIE["cookie_current_category_id"])) {
                                                        // длина пагинации для определенной категории
                                                        $count_query = $conn->query("SELECT COUNT(*) FROM products WHERE category =" . $_COOKIE["cookie_current_category_id"]);
                                                        $count_array = $count_query->fetch_array(MYSQLI_NUM);
                                                        $count = $count_array[0];

                                                        $limit = 6;
                                                        $start = ($page*$limit)-$limit;
                                                        $length = ceil($count/$limit);
                                                        $p = 1;

                                                        $sql = "SELECT * FROM products WHERE category =" . $_COOKIE["cookie_current_category_id"] ."  LIMIT $start, $limit";
                                                        $result = $conn->query($sql);                               
                                                        
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            include '../parts/shop/product_card.php';
                                                            }
                                                            }  else { 
                                                        // длина пагинации для всех товаров суммарно
                                                        $count_query = $conn->query("SELECT COUNT(*) FROM products");
                                                        $count_array = $count_query->fetch_array(MYSQLI_NUM);
                                                        $count = $count_array[0];

                                                        $limit = 6;
                                                        $start = ($page*$limit)-$limit;
                                                        $length = ceil($count/$limit);
                                                        $p = 1;  

                                                        $sql = "SELECT * FROM products LIMIT $start, $limit";
                                                        $result = $conn->query($sql);                               
                                                        
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            include '../parts/shop/product_card.php';
                                                            }
                                                        }                                                       
                                                           
                                                        ?>
                                                    <!-- КАРТОЧКА ПРОДУКТА end -->
                                                </div>
                                            </div>
										</div> <!-- id="home" -->
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
                    </div>  <!-- Этот див используется в AJAX для замены его содержимого -->



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
		<!-- <script src="/js/script.js"></script> -->
<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
?>
