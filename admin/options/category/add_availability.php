<?php
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

    if(isset($_POST["add"])) {
        if(isset($_POST['newtitle']) 
            && $_POST['newtitle'] != ""
        ) {
           $sql = "INSERT INTO `availability` (`title`) VALUES ('" . $_POST['newtitle'] . "')";
            if(mysqli_query($conn, $sql)) {

            header("Location: /admin/pages/category.php");
            }
        }  else {
            echo "<h2>Произошла ошибка</h2>";
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
							<h2 class="page-title"> ADD Category</h2>
							<p><a href="/admin/">Главная</a> | <a href="/admin/pages/category.php">Category</a> | Add Availability</p>
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
                    <h2>Add Availability</h2>
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
    
                                                <!-- форма додавання категорій -->
                                                
                                                <form action = "/admin/options/category/add_availability.php" method = "POST">
                                                  
                                                    <label for="formGroupExampleInput">Title Availability</label><br>
                                                    <input type="text" name="newtitle" class="form-control" placeholder="Title">
                                                    <br>
                                                    <button class="btn btn-primary ce5 p-2" type="submit" name="add">Add Availability</button>
                                                  
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