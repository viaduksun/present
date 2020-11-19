<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/header.php";
?>
        <!-- pages-title-start -->
		<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Аккаунт</h2>
                            <p><a href="/">Главная</a> | Войти | Зарегистрироваться</p>
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
                            <p>Здравствуйте, добро пожаловать в аккаунт</p>
                            <form action="#">
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Email
                                        <em>*</em>
                                    </label>
                                    <input type="email">
                                </p>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                        Пароль
                                        <em>*</em>
                                    </label>
                                    <input type="password">
                                </p>
                                <div class="forgot-password1">
                                    <a class="forgot-password" href="#">Забыли свой пароль?</a>
                                </div>
                                <p class="login-submit5">
                                    <input class="button-primary" type="submit" value="login">
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="tb-login-form res">
                            <h5 class="tb-title">Создать новый аккаунт</h5>
                            <p>Здравствуйте, добро пожаловать в аккаунт</p>
                            <form action="#">
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Имя
                                        <em>*</em>
                                    </label>
                                    <input type="name">
                                </p>
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Email
                                        <em>*</em>
                                    </label>
																		<input type='text' title='email' required pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}' />
                                    <input type="email">
                                </p>
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Пароль
                                        <em>*</em>
                                    </label>
                                    <input type="email">
                                </p>
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Номер телефона
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