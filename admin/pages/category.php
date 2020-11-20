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
							<h2 class="page-title">Category</h2>
							<p><a href="/admin/">Главная</a> | Category</p>
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
                    <h2>Category Information</h2>
                </div>
                <div class="faq-accordion">
                    <div class="panel-group pas7" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                        	<div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Edit Category Information <i class="fa fa-caret-down"></i></a>
                                </h4>
                            </div>
                            
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                                <div class="row">
                                    <div class="easy2">
                                        <!-- таблиця Category -->
										    <table class="table table-hover table-striped table-bordered">
							                    <thead>
							                        <th>Name Category</th>
							                        <th>ID</th>
							                        <th>Opcions</th>
							                        
							                    </thead>
											<tbody>
											<?php 
										    $sgl = "SELECT * FROM `categories`";
										    $result = $conn->query($sgl);

										    while ($row = mysqli_fetch_assoc($result)) {
										     ?>
										    <tr>
										        <ul class="list-group">
										        	<input class="form-check-input" type="hidden" name="cotegory" id="exampleRadios1" value="<?php echo $row['id']; ?>" checked>
										            <td><?php echo $row['title']; ?></td>
										            <td><?php echo $row['id']; ?></td>
											        <td>
										                <div class="btn-group" role="group" aria-label="Basic example">
										                  <a href="/admin/options/category/edit_categories.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary ce5">Edit</a>
										                  <a href="/admin/options/category/delete_categories.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary ce5">Delete</a>
										                </div>
										            </td>
										         </ul>
										    </tr>
											<?php
										    }
											?>
											</tbody>
										</table>
										<div class="buttons clearfix">
	                                        <div class="pull-right">
	                                        	<a class="btn btn-primary ce5" href="/admin/options/category/add_categories.php" type="submit" name="add_categories">Add Categories</a><br>
	                                        </div>
	                                    </div>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">Modify availability   <i class="fa fa-caret-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                <div class="easy2">
                                    <!-- таблиця Availability -->
								    <table class="table table-hover table-striped table-bordered">
					                    <thead>
					                        <th>Name Availability</th>
					                        <th>ID</th>
					                        <th>Opcions</th>
					                        
					                    </thead>
									<tbody>
									<?php 
								    $sgla = "SELECT * FROM `availability`";
								    $resultA = $conn->query($sgla);

								    while ($rowA = mysqli_fetch_assoc($resultA)) {
								     ?>
								    <tr>
								        <ul class="list-group">
								        	<input class="form-check-input" type="hidden" name="availability" id="exampleRadios1" value="<?php echo $row['id']; ?>" checked>
								            <td><?php echo $rowA['title']; ?></td>
								            <td><?php echo $rowA['id']; ?></td>
									        <td>
								                <div class="btn-group" role="group" aria-label="Basic example">
											        <a href="/admin/options/category/edit_availability.php?id=<?php echo $rowA['id']; ?>" type="button" class="btn btn-primary ce5">Edit</a>
									                <a href="/admin/options/category/delete_availability.php?id=<?php echo $rowA['id']; ?>" type="button" class="btn btn-primary ce5">Delete</a>
								                </div>
								            </td>
								         </ul>
								    </tr>
									<?php
								    }
									?>
									</tbody>
								</table>
								<div class="buttons clearfix">
                                    <div class="pull-right">
                                    	<a class="btn btn-primary ce5" href="/admin/options/category/add_availability.php" type="submit" name="add_availability">Add Availability</a><br>
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