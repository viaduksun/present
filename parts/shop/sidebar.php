<div class="col-md-4 col-lg-3 col-sm-12">
                        <div class="all-shop-sidebar">
                            <div class="top-shop-sidebar">
                                <h3 class="wg-title">Поиск</h3>
                            </div>
                            <div class="shop-one">
                                <h3 class="wg-title2">Категории</h3>
                                <ul class="product-categories">
	<!---------------------------------ВЫВОД КАТЕГОРИЙ  ------------------------------------->
                                    <li class='cat-item <?php if (!isset($_COOKIE["cookie_current_category_id"])) { ?> current-cat <?php } ?>'>
                                        <a href='/pages/shop.php' onclick="cookie_remove(this)" >All</a> <span class='count'>(10)</span>
                                    </li>
                                     <?php 
                                        $sql = "SELECT * FROM categories";
                                        $result = $conn->query($sql);  
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            if (isset($_COOKIE["cookie_current_category_id"]) && $_COOKIE["cookie_current_category_id"] == $row['id']) {                                                
                                                echo " <li class='cat-item current-cat'>

                                                         <a href='#' onclick='categorySelect(this)' data-category_id=" . $row['id'] . ">" . $row['title'] . " </a> <span class='count'>(10)</span>
                                                </li> ";
                                            } else {
                                         
                                                echo " <li class='cat-item '>
                                                         <a href='#' onclick='categorySelect(this)' data-category_id=" . $row['id'] . ">" . $row['title'] . " </a> <span class='count'>(10)</span>
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