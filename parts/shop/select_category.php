<?php
  include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php"; 

  ?>  
<!-- =========================================================================================== -->
 <!-- Это содержимое дива <div class="col-md-8 col-lg-9 col-sm-12" id="shop_place_for_cards"> в AJAX для замены его содержимого -->
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
                                                <div class="shop-tab" >
                                                    <!-- КАРТОЧКА ПРОДУКТА start -->
                                                    <?php 
                                                        // =========================
                                                        // Настройка пагинации
                                                        // =========================
                                                        if(!isset($_GET['page'])) $page = 1; else $page = $_GET['page'];                                                        
                                                         
														// сюда из JS в переменную  $_POST передан ID выбранной категории
														  if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

														$current_category_id = $_POST['current_category_id'];
														setcookie ("cookie_current_category_id", $current_category_id, time()+60*60, "/");
															// =========================
															// Настройка пагинации
															// =========================
															//считаем количество товаров выбранной категории ($count)
															$count_query = $conn->query("SELECT COUNT(*) FROM products WHERE category =" . $_POST['current_category_id']);
															$count_array = $count_query->fetch_array(MYSQLI_NUM);
															$count = $count_array[0];

															$limit = 6;
															$start = ($page*$limit)-$limit;
															// получаем кол страниц пагинации ceil - округление числа в большую сторону
															$length = ceil($count/$limit);
															// echo $length;	

															$sql = "SELECT * FROM products  WHERE category =" . $_POST['current_category_id'] ." LIMIT $start, $limit";
															$result = $conn->query($sql);
															$p = 1;                                                     

															while ($row = mysqli_fetch_assoc($result)) {

															include 'product_card.php';
															} 
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
                   
