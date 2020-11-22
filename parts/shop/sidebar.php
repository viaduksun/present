<div class="col-md-4 col-lg-3 col-sm-12">
                        <div class="all-shop-sidebar">
                            <div class="top-shop-sidebar">
                                <h3 class="wg-title">Поиск</h3>
                            </div>
                            <div class="shop-one">
                                <h3 class="wg-title2">Категории</h3>
                                <ul class="product-categories">

                            <?php 
                            if (isset($_COOKIE["cookie_current_category_id"])) {
                            
                            };
                            // количество всех товаров в БД
                            $count_query = $conn->query("SELECT COUNT(*) FROM products");
                            $count_array_all = $count_query->fetch_array(MYSQLI_NUM);
                            $count_all_products = $count_array_all[0];
                            ?>

	<!---------------------------------ВЫВОД КАТЕГОРИЙ  ------------------------------------->
                                    <li class='cat-item <?php if (!isset($_COOKIE["cookie_current_category_id"])) { ?> current-cat <?php } ?>'>
                                        <a href='/pages/shop.php' onclick="cookie_remove(this)" >Все товары</a> <span class='count'>(<?php echo $count_all_products ?>)</span>
                                    </li>
                                     <?php 
                                        $sql = "SELECT * FROM categories";
                                        $result = $conn->query($sql);  

                                        while ($row = mysqli_fetch_assoc($result)) {

                                            if (isset($_COOKIE["cookie_current_category_id"]) && $_COOKIE["cookie_current_category_id"] == $row['id']) { 
                                                // определяем количество товаров выбранной категории
                            $count_query = $conn->query("SELECT COUNT(*) FROM products WHERE category =" . $_COOKIE["cookie_current_category_id"]);
                            $count_array = $count_query->fetch_array(MYSQLI_NUM);
                            $count_current_category = $count_array[0];

                                                echo " <li class='cat-item current-cat'>

                                                         <a 
                                                         href='#'                                                         
                                                         onclick='categorySelect(this)'
                                                         data-category_id=" . $row['id'] . "
                                                         data-prod_count=" . $count_current_category . "
                                                         >" . $row['title'] . " </a> <span class='count'>(" . $count_current_category . ")</span>
                                                </li> ";
                                            } else {
                                                                    // определяем количество товаров выбранной категории
                            $count_query = $conn->query("SELECT COUNT(*) FROM products WHERE category =" . $row['id']);
                            $count_array = $count_query->fetch_array(MYSQLI_NUM);
                            $count_some_category = $count_array[0];
                                         
                                                echo " <li class='cat-item '>
                                                         <a
                                                          href='#'
                                                          onclick='categorySelect(this)'
                                                          data-category_id=" . $row['id'] . "
                                                          data-prod_count=" . $count_some_category . " 
                                                          
                                                          >" . $row['title'] . " </a> <span class='count'>(" . $count_some_category . ")</span>
                                                </li> ";
                                            }
                                        }
                                      ?>                                     
                                </ul>
                            </div>
                            <!-- PRICE SLIDER START -->
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
                            <!-- PRICE SLIDER END -->                            
                            
                        </div>
                    </div> 