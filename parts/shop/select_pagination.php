<?php
  include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php"; 

  ?>  
<!-- =========================================================================================== -->
 <!-- Это содержимое дива <div class="col-md-8 col-lg-9 col-sm-12" id="shop_place_for_cards"> в AJAX для замены его содержимого -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="features-tab">
                                <!-- SHOP Nav tabs -->
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
            <select onchange="pagination_change(this)">                
                <?php 
                if ($_POST['current_limit'] == 6 ) { ?>
                  <option value="<?php echo $_POST['current_limit']?>"><?php echo $_POST['current_limit'] ?> </option>
                  <option value="12">12</option>
                  <option value="24">24</option>
                <?php } elseif ($_POST['current_limit'] == 12 ) { ?>                  
                  <option value="<?php echo $_POST['current_limit']?>"><?php echo $_POST['current_limit'] ?> </option>
                  <option value="6">6</option>
                  <option value="24">24</option>
                <?php } elseif ($_POST['current_limit'] == 24 ) { ?>
                  <option value="<?php echo $_POST['current_limit']?>"><?php echo $_POST['current_limit'] ?> </option>
                  <option value="6">6</option>                  
                  <option value="24">12</option> 
                <?php }
                ?>               
            </select>      
        </div>
    </div>
</div>
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

														$current_limit = $_POST['current_limit'];
														setcookie ("current_limit", $current_limit, time()+60*60, "/");
															// =========================
															// Настройка пагинации
															// =========================
															//считаем количество товаров выбранной категории ($count)
                            if (isset($_COOKIE['cookie_current_category_id'])) {
                              $count_query = $conn->query("SELECT COUNT(*) FROM products WHERE category =" . $_COOKIE['cookie_current_category_id']);
                              $count_array = $count_query->fetch_array(MYSQLI_NUM);
                              $count = $count_array[0];                       
                            } else {
                              //иначе считаем количество всех товаров БД ($count)
                              $count_query = $conn->query("SELECT COUNT(*) FROM products");
                              $count_array = $count_query->fetch_array(MYSQLI_NUM);
                              $count = $count_array[0];
                            }

															$limit = $current_limit;
															$start = ($page*$limit)-$limit;
															// получаем кол страниц пагинации  для $count полученного при одном из условий выше
                              // ceil - округление числа в большую сторону
															$length = ceil($count/$limit);
															// echo $length;	
                              if (isset($_COOKIE['cookie_current_category_id'])) {

															$sql = "SELECT * FROM products  WHERE category =" . $_COOKIE['cookie_current_category_id'] ." LIMIT $start, $limit";
															$result = $conn->query($sql);
                            } else {
                              $sql = "SELECT * FROM products LIMIT $start, $limit";
                              $result = $conn->query($sql);
                            }
															$p = 1;
                              //Выводим карточки товатов, при этом в $row у нас либо все товары, либо только товары выбранной категории
															while ($row = mysqli_fetch_assoc($result)) {
															include 'product_card.php';
															} 
														} ?>
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
                   
