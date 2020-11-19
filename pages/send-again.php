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
		<div class="section-padding-bottom section-padding">
            <div class="container">
							<div class="row">
									<div class="col-md-12 col-xs-12">
											<div class="tb-login-form ">
													<h5 class="tb-title">Повторная отправка подтверждения аккаунта по email.</h5>
													<form action="#">
															<p class="checkout-coupon top log a-an">
																	<label class="l-contact">
																			Введите Email аккаунта
																			<em>*</em>
																	</label>
																	<input type='text' title='email' required pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}' />
															</p>
															<p class="login-submit5">
																	<button type="submit" class="button-primary">Войти</button>
															</p>
													</form>
											</div>
									</div>
							</div>
            </div>
        </div>
		<!-- login  content section end -->
<?php
	include $_SERVER["DOCUMENT_ROOT"] . "/parts/index/footer.php"
?>