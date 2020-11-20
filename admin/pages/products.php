<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/header.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
?>

<!-- pages-title-start -->
<section class="contact-img-area">
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="con-text">
								<h2 class="page-title">Products</h2>
								<p><a href="/admin/">Home</a> | Products </p>
						</div>
					</div>
				</div>
		</div>
	</section>
<!-- pages-title-end -->

<section class="collapse_area coll2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="check">
                    <h2>Products Information</h2>
                </div>
                <div class="faq-accordion">
                    <div class="panel-group pas7" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 >
                                    <a class="collapsed method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"></a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                                <div class="row">
                                    <div class="easy2">
                                    	<div class="buttons clearfix">
	                                        <div class="pull-right">
	                                        	<a class="btn btn-primary ce5" href="/admin/options/products/add_product.php" type="submit" name="add_product">Add Product</a><br>
	                                        </div>
	                                    </div><br>
                                        <div class="card-body table-full-width table-responsive">
										    <table class="table table-hover table-striped table-bordered">
							                    <thead>
							                        <th>ID</th>
							                        <th>Title</th>
							                        <th>Description</th>
							                        <th>Category</th>
							                        <th>Count</th>
							                        <th>Availability</th>
							                        <th>Status</th>
							                        <th>Price</th>
							                        <th>Opcions</th>
							                    </thead>
											<tbody>
											<?php 
										    $sgl = "SELECT * FROM `products`";
										    $result = $conn->query($sgl);

										    while ($row = mysqli_fetch_assoc($result)) {
										     ?>

										    <tr>
				                                <td><?php echo $row['id']; ?></td>
				                                <td><?php echo $row['title']; ?></td>
				                                <td><?php echo $row['description']; ?></td>
				                                <td><?php echo $row['category']; ?></td>
				                                <td><?php echo $row['count']; ?></td>
				                                <td><?php echo $row['availability']; ?></td>
				                                <td><?php echo $row['status']; ?></td>
				                                <td><?php echo $row['price']; ?></td>
				                                <td>
				                                	
									                
									                  <a href="/admin/options/products/edit_product.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary ce5">Edit</a><br>
									                  <a href="/admin/options/products/delete_product.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary ce5">Delete</a>
									                
									                
									            </td>
				                            </tr>
										    
											<?php
										    }
											?>
											</tbody>
										</table>
										</div>
										<div class="buttons clearfix">
	                                        <div class="pull-right">
	                                        	<a class="btn btn-primary ce5" href="/admin/options/products/add_product.php" type="submit" name="add_product">Add Product</a><br>
	                                        </div>
	                                    </div>
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






<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/footer.php"
?>