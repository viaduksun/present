<?php
    
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

if(isset($_POST["add"])) {
    if(isset($_POST['title']) && isset($_POST["description"]) && isset($_POST["count"]) && isset($_POST["status"]) && isset($_POST["price"]) && isset($_POST["category"]) && isset($_POST["availability"])
        && $_POST['title'] != "" && $_POST["description"] != "" && $_POST["count"] != "" && $_POST["price"] != "" && $_POST["availability"] != ""
    ) {
       $sql = "INSERT INTO `products` (`title`, `description`, `category`, `count`, `availability`, `status`, `price`) 
   VALUES ('" . $_POST['title'] . "', '" . $_POST["description"] . "', '" . $_POST["category"] . "', '" . $_POST["count"] . "', '" . $_POST["availability"] . "', '" . $_POST["status"] . "', '" . $_POST["price"] . "')";

        if(mysqli_query($conn, $sql)) {

        header("Location: /admin/pages/products.php");
        }
    }  else {
    	
        echo "<h2>Произошла ошибка</h2>" . ini_set('error_reporting', E_ALL);
    }
    
}



    include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/header.php";
?>

<!-- pages-title-start -->
<section class="contact-img-area">
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="con-text">
								<h2 class="page-title">ADD Products</h2>
								<p><a href="/admin/">Главная</a> | <a href="/admin/pages/products.php">Products</a> | ADD Products</p>
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
                    <h2>Product Information</h2>
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
                                        <form action = "/admin/options/products/add_product.php" method = "POST">
                                        			
  											
										    <label for="formGroupExampleInput">Title</label>
										    <input type="text" name="title" class="form-control" placeholder="Name"><br>
										  	
										  	
										    <label for="formGroupExampleInput2">Description</label>
										    <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Description"><br>
										  
										    <label for="formGroupExampleInput2">Count</label>
										    <input type="number" name="count" class="form-control" id="formGroupExampleInput2" placeholder="Count"><br>

										    <label for="formGroupExampleInput2">Availability</label><br>
										    
										    <?php 
                                                $sgla = "SELECT * FROM `availability`";
                                                $resultA = $conn->query($sgla);

                                                while ($rowA = mysqli_fetch_assoc($resultA)) {
                                                 ?>
                                                   <input class="formGroupExampleInput2" type="radio" name="availability" id="exampleRadios1" value="<?php echo $rowA['id']; ?>" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        <?php echo $rowA['title']; ?>
                                                    </label> <br>
                                                <?php
                                                }
                                            ?>

										    <!-- Status -->
										    <label for="formGroupExampleInput2">Status</label><br>
										   		<input class="formGroupExampleInput2" type="radio" name="status" id="exampleRadios2" value="0" checked>
											    <label class="form-check-label" for="exampleRadios2"> USUAL</label> <br>

											    <input class="formGroupExampleInput2" type="radio" name="status" id="exampleRadios2" value="1" checked>
											    <label class="form-check-label" for="exampleRadios2"> NEW</label> <br>

											    <input class="formGroupExampleInput2" type="radio" name="status" id="exampleRadios2" value="2" checked>
											    <label class="form-check-label" for="exampleRadios2"> SALE</label> <br>

										     <!-- /Status -->

										    <label for="formGroupExampleInput2">Price</label>
										    <input type="number" name="price" class="form-control" id="formGroupExampleInput2" placeholder="content">  <br>

										    
										    <label for="exampleFormControlSelect1">Category</label>
										    
										    <select class="form-control" name="category" id="exampleFormControlSelect1">
										    <?php 
											        $sgl = "SELECT * FROM `categories`";
											        $result = $conn->query($sgl);
											        while ($row = mysqli_fetch_assoc($result)) {
											        ?>										    
										    		
											        <option value="<?php echo $row['id']; ?>" ><?php echo $row['title']; ?></option>
											        
											        <?php
											      }
											    ?>
										    </select><br>
										    <button class="btn btn-primary ce5" type="submit" name="add">Add Product</<button><br>
		                                </form>
										
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