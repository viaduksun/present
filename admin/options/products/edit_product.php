<?php
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

    $sql = "SELECT * FROM `products` WHERE `id`=" . $_GET["id"]; 
     
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
 


if(isset($_POST["send"])) {
    if(mysqli_query($conn, $sql)) {

        header("Location: /admin/pages/products.php");
    }
    if(isset($_POST['title']) && $_POST['title'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `products` SET `title`='" . $_POST['title'] . "' WHERE `products`.id='" . $_GET["id"] . "'" );       
    } 
    if(isset($_POST['description']) && $_POST['description'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `products` SET `description`='" . $_POST['description'] . "' WHERE `products`.id='" . $$_GET["id"] . "'" );       
    }
    if(isset($_POST['count']) && $_POST['count'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `products` SET `count`='" . $_POST['count'] . "' WHERE `products`.id='" . $_GET["id"] . "'" );       
    }
    if(isset($_POST['availability']) && $_POST['availability'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `products` SET `availability`='" . $_POST['availability'] . "' WHERE `products`.id='" . $_GET["id"] . "'" );       
    }
    if(isset($_POST['status']) && $_POST['status'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `products` SET `status`='" . $_POST['status'] . "' WHERE `products`.id='" . $_GET["id"] . "'" );       
    }
    if(isset($_POST['price']) && $_POST['price'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `products` SET `price`='" . $_POST['price'] . "' WHERE `products`.id='" . $_GET["id"] . "'" );       
    }
    if(isset($_POST['category']) && $_POST['category'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `products` SET `category`='" . $_POST['category'] . "' WHERE `products`.id='" . $_GET["id"] . "'" );       
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
							<h2 class="page-title"> EDIT Product</h2>
							<p><a href="/admin/">Главная</a> | <a href="/admin/pages/products.php">Products</a> | EDIT Product</p>
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
                    <h2>EDIT Product</h2>
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
                                        <table class="table table-hover table-striped">
                                            <div class="container-fluid">
    
                                                <!-- форма зміни категорії Title -->
                                                
                                                <form action = "/admin/options/products/edit_product.php?id=<?php echo $_GET["id"];?>" method = "POST">
                                                  
                                                    <label for="formGroupExampleInput">Title "<?php echo $row['title']; ?>"</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Name"><br>
                                                    
                                                    
                                                    <label for="formGroupExampleInput2">Description "<?php echo $row['description']; ?>"</label>
                                                    <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Description"><br>
                                                  
                                                    <label for="formGroupExampleInput2">Count "<?php echo $row['count']; ?>"</label>
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


                                                    <br>

                                                    <!-- Status -->
                                                    <label for="formGroupExampleInput2">Status</label><br>
                                                        <input class="formGroupExampleInput2" type="radio" name="status" id="exampleRadios2" value="0" checked>
                                                        <label class="form-check-label" for="exampleRadios2"> USUAL</label> <br>

                                                        <input class="formGroupExampleInput2" type="radio" name="status" id="exampleRadios2" value="1" checked>
                                                        <label class="form-check-label" for="exampleRadios2"> NEW</label> <br>

                                                        <input class="formGroupExampleInput2" type="radio" name="status" id="exampleRadios2" value="2" checked>
                                                        <label class="form-check-label" for="exampleRadios2"> SALE</label> <br>

                                                     <!-- /Status -->
                                                        <br>
                                                    <label for="formGroupExampleInput2">Price "<?php echo $row['price']; ?>"</label>
                                                    <input type="number" name="price" class="form-control" id="formGroupExampleInput2" placeholder="price"><br>

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
                                                    </select>
                                                    <br>
                                                    <button class="btn btn-primary ce5 m-2" type="submit" name="send">EDIT Product</button>
                                                 </form>
                                            </div>
                                        </table>
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