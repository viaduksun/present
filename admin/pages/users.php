<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/header.php"
?>
<!-- pages-title-start -->
<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Мой аккаунт</h2>
                            <p><a href="/admin/">Главная</a></p>
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
                    <h2>Users Account</h2>
                </div>
                <div class="faq-accordion">
                    <div class="panel-group pas7" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Edit Users Account<i class="fa fa-caret-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                                <div class="row">
                                    <div class="easy2">
                                        <h2>Users Account Information</h2>
                                        <form class="form-horizontal" action="#">
                                            <fieldset>
                                                <legend>Your Personal Details</legend>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">First Name </label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Last Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">E-Mail</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="email" placeholder="E-Mail">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Telephone</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="tel" placeholder="Telephone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Fax</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Fax">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="buttons clearfix">
                                                <div class="pull-left">
                                                    <a class="btn btn-default ce5" href="#">Back</a>
                                                </div>
                                                <div class="pull-right">
                                                    <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Change your password   <i class="fa fa-caret-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
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
                                                    <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                </div>
                                            </div>
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
<!-- my account  content section end -->

<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/footer.php"
?>