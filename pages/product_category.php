<?php
  include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php";
    
    include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/shopheader.php";
   
    ?>  
    <!-- shop-style content section start -->
    <section class="pages products-page section-padding-top section-padding-bottom">
      <div class="container">
        <div class="row">
                <!-- SIDEBAR START -->
            <?php
                        include $_SERVER["DOCUMENT_ROOT"] . '/parts/shop/sidebar.php';
                     ?>
                    <!-- SIDEBAR END -->

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
                                                <div class="shop-tab" id="shop_place_for_cards">
                                                    <!-- КАРТОЧКА ПРОДУКТА start -->
                                                    
                                                    <!-- КАРТОЧКА ПРОДУКТА end -->
                                                </div>
                                            </div>
                    </div>
                  <!-- отображение строками!!!!! START-->
                                     <?php
                                        // include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php";
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
                                      <li class="page-item"><a class="page-link" href="product_category.php?page=<?php if ($page>= 2) echo $page - 1; else echo $page ?>"><i class="fa fa-arrow-left"></i></a></li>
                                      <?php 
                                      if($length<=5) {foreach (range(1, $length) as $p) { ?>
                                     <li class="page-item <?php if($page == $p) { echo 'active';} ?> "> <a class="page-link" href="product_category.php?page= <?php echo $p ?> "> <?php echo $p ?> </a> </li>
                                     <?php } };

                                     if($length>5 && $page < 5) {foreach (range(1, 5) as $p) { ?>
                                     <li class="page-item <?php if($page == $p) { echo 'active';} ?> "> <a class="page-link" href="product_category.php?page= <?php echo $p ?> "> <?php echo $p ?> </a> </li>
                                     <?php } };

                                     if($length>5 && $page >= 5) {foreach (range($length - 4, $length) as $p) { ?>
                                     <li class="page-item <?php if($page == $p) { echo 'active';} ?> "> <a class="page-link" href="product_category.php?page= <?php echo $p ?> "> <?php echo $p ?> </a> </li>
                                     <?php } };

                                       ?>       
                                      <li class="page-item "> <a class="page-link" href="product_category.php?page=<?php if ($page <= $length-1) echo $page + 1; else echo $page ?>"><i class="fa fa-arrow-right"></i></a></li>
                                  </ul>
                              </nav>
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
include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php";
  include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
?>




  
  		
  	
