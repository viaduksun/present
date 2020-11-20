<div class="col-md-4 col-lg-4 col-sm-6">
	<div class="single-product s-top s-bottom">
		<div class="product-img">
			<div class="pro-type">

				<?php 
				// Задание статуса товара либо NEW либо ничего (в БД графа status 1 / 0)
				if ($row['status']== 1) {?> <span>new</span> <?php
				}?>				
			</div>
			<a href="single_product_page.php?productId=<?php echo $row['id'] ?>">				
				<img src="/img/products/<?php echo $row['image'] ?>"/>
				<!-- <img class="secondary-image" alt="Product Title" src="/img/products/2.jpg"> -->
			</a>
		</div>
		<div class="product-dsc">
			<h3><a href="#"><?php echo $row['title'] ?></a></h3>
			<div class="star-price">
				<span class="price-left"><?php echo $row['price'] ?> грн.</span>
				<span class="star-right">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</span>
			</div>
		</div>
		<div class="actions-btn">
			<a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Посмотреть"><i class="fa fa-eye"></i></a>
			<a class="add-to-cart" data-id="<?php echo $row["id"] ?>" data-toggle="tooltip" data-placement="top" title="В корзину"><i class="fa fa-shopping-cart"></i></a>
		</div>
	</div>
</div>