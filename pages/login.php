<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php";
?>
        <!-- pages-title-start -->
		<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Login</h2>
                            <p><a href="#">Home</a> | Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- login content section start -->
		<div class="login-area section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="tb-login-form ">
                            <h5 class="tb-title">Login</h5>
                            <p>Hello, Welcome your to account</p>
                            <div class="tb-social-login">
                                <a class="tb-facebook-login" href="#">
                                    <i class="fa fa-facebook"></i>
                                    Sign In With Facebook
                                </a>
                                <a class="tb-twitter-login res" href="#">
                                    <i class="fa fa-twitter"></i>
                                    Sign In With Twitter
                                </a>
                            </div>
                            <form action="#">
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Email Address
                                        <em>*</em>
                                    </label>
                                    <input type="email">
                                </p>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                        Password
                                        <em>*</em>
                                    </label>
                                    <input type="password">
                                </p>
                                <div class="forgot-password1">
                                    <label class="inline2">
                                        <input type="checkbox" name="rememberme7">
                                        Remember me! <em>*</em>
                                    </label>
                                    <a class="forgot-password" href="#">Forgot Your password?</a>
                                </div>
                                <p class="login-submit5">
                                    <input class="button-primary" type="submit" value="login">
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="tb-login-form res">
                            <h5 class="tb-title">Create a new account</h5>
                            <p>Hello, Welcome your to account</p>
                            <form action="#">
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Email Address
                                        <em>*</em>
                                    </label>
                                    <input type="email">
                                </p>
                                <p class="login-submit5 ress">
                                    <input value="SignUp" class="button-primary" type="submit">
                                </p>
                            </form>
                            <div class="tb-info-login ">
                                <h5 class="tb-title4">SignUp today and you'll be able to:</h5>
                                <ul>
                                    <li>Speed your way through the checkout.</li>
                                    <li>Track your orders easily.</li>
                                    <li>Keep a record of all your purchases.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- login  content section end -->
		<?php
			include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
		?>