<!-- Card list by strings START -->
        <div class="li-item">
            <div class="col-md-4 col-sm-4">
                <div class="tb-product-item-inner tb2 pct-last">

                    <?php 
                    // Задание статуса товара 1- NEW 2-SALE 0 - пусто (в БД графа status 1 / 2/ 0)
                    if ($row['status']== 1) {?> <div class="pro-type"><span >new</span></div> <?php
                    }elseif ($row['status']== 2) {?><div class="pro-type_sale_status"><span >sale</span></div> <?php
                    } 
                    ?> 

                    <div class="re-img">
                        <a href="single_product_page.php?productId=<?php echo $row['id'] ?>">               
                            <img src="/img/products/<?php echo $row['image'] ?>"/>
                         </a>
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
                        <a href="#"><?php echo $row['title'] ?></a>
                    </div>
                    <div class="tb-product-wrap-price-rating">
                        <div class="tb-product-price font-noraure-3">
                            
                            <span class="amount2 ana"><?php echo $row['price'] ?> грн.</span>
                        </div>
                    </div>
                    <p class="desc"><?php echo $row['description'] ?></p>
                    <div class="last-cart l-mrgn ns">
                        <a class="las4" href="#" data-id="<?php echo $row["id"] ?>" data-toggle="tooltip" data-placement="top" title="В корзину" onclick="addCart(this)">В корзину</a>                        
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