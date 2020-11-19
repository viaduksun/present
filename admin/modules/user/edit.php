<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/admin/configs/variables.php';
include $_SERVER["DOCUMENT_ROOT"] . '/admin/parts/header.php';

// кнопка нажата
if (isset($_GET['save'])) {

    $sql = "UPDATE users SET name = '" . $_GET["name"] . "', updated_at = current_timestamp, email = '" . $_GET["email"] . "' WHERE users.id =" . $_GET['id'];
    $result = $conn->query($sql);
    // var_dump(expression)
    // header('Location: http://present.local/admin/pages/users.php');
}
?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Редактирование пользователя</h2>
                    <p><a href="/admin/">Главная</a> | <a href="/admin/pages/users.php">Аккаунты пользователей</a> | Редактирование пользователя</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- my account content section start -->
<section class="collapse_area coll2 section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="check">
                    <!-- <h2>Users Account</h2> -->
                </div>

                <div class="faq-accordion">
                    <div class="panel-group pas7" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Edit User Account<i class="fa fa-caret-down"></i></a>
                                    </h4>
                                </div>
                                
                                <div id="collapseTwo" class="panel-collapse collapse  in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                    <div class="row">
                                        <div class="easy2">
                                            <h2>User Account Information</h2>
                                            <form class="form-horizontal" action="edit.php" method="GET">
                                                <?php 
                                                $sql = "SELECT * FROM users WHERE id =". $_GET["id"];
                                                $result = $conn->query($sql);
                                                $row = mysqli_fetch_assoc($result);
                                                ?>
                                                <fieldset>
                                                    <legend>User Personal Details</legend>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">ID</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['id']?>" name="id" type="text" disabled>
                                                            <input class="form-control" value="<?php echo $row['id']?>" name="id" type="hidden">
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="name" value="<?php echo $row['name']?>" type="text" placeholder="Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['email']?>" name="email" type="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Email verified</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['email_verified_at']?>" name="email_verified_at" type="text" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Created</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['created_at']?>" name="created_at" type="text" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Updated</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['updated_at']?>" name="updated_at" type="text" disabled>
                                                        </div>
                                                    </div>


                                                <!-- <legend>Your Password</legend>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" placeholder="password">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Password Confirm</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" placeholder="password confirm">
                                                    </div>
                                                </div> -->


                                            </fieldset>
                                            <div class="buttons clearfix">
                                                <div class="pull-left">
                                                    <a class="btn btn-default ce5" href="../../pages/users.php">Back</a>
                                                </div>
                                                <div class="pull-right">
                                                     <button name="save" value="1" type="submit" class="btn btn-primary ce5">Save</button>
                                                    <!-- <input class="btn btn-primary ce5" type="submit" value="Continue"> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Change User password   <i class="fa fa-caret-down"></i></a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                    <div class="row">
                                        <div class="easy2">
                                            <h2>Change Password</h2>
                                            <form class="form-horizontal" action="#">
                                                <fieldset>
                                                    <legend>Your Password</legend>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="password" placeholder="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label">Password Confirm</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="password" placeholder="password confirm">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="buttons clearfix">
                                                    <div class="pull-left">
                                                        <a class="btn btn-default ce5" href="#">Back</a>
                                                    </div>
                                                    <div class="pull-right">
                                                       
                                                        <input name="continue" class="btn btn-primary ce5" type="submit" value="Continue">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/footer.php"
?>