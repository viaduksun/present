<?php
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

    $sql = "SELECT * FROM `categories` WHERE `id`=" . $_GET["id"]; 
    $category_id = $_GET["id"]; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
 


if(isset($_POST["send"])) {
    if(mysqli_query($conn, $sql)) {

        header("Location: /admin/pages/category.php");
    }
    if(isset($_POST['newtitle']) && $_POST['newtitle'] != "") { 
       $sql = mysqli_query ($conn, "UPDATE `categories` SET `title`='" . $_POST['newtitle'] . "' WHERE `categories`.id='" . $category_id . "'" );       
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
							<h2 class="page-title"> EDIT Category</h2>
							<p><a href="/admin/">Главная</a> | <a href="/admin/pages/category.php">Category</a> | EDIT Category</p>
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
                    <h2>EDIT Category</h2>
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
                                                
                                                <form action = "/admin/options/category/edit_categories.php?id=<?php echo $_GET["id"];?>" method = "POST">
                                                  
                                                    <label for="formGroupExampleInput">Title category "<?php echo $row['title']; ?>"</label><br>
                                                    <input type="text" name="newtitle" class="form-control" value="<?php echo $row['title']; ?>" placeholder="<?php echo $row['title']; ?>">
                                                    <br>
                                                    <button class="btn btn-primary ce5 p-2" type="submit" name="send">EDIT Category</button>
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