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
		<div class="section-padding-bottom">
            <div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="page-title">
											<h2>Увы! </h2>
									</div>
									<div class="panel panel-default testimonial-img">
											<div class="panel-body">
												<div class="row">
													<div class="col-sm-12">
													<strong>Ваш аккаунт не верефецирован! Перейдите на почту и подтвердите действие.</strong>
														<p>	Или <a href="/pages/send-again.php" style="text-transform: lowercase;">отправить письмо верефикации повторно</a></p>
													</div>
												</div>
											</div>
									</div>
								</div>
							</div>
							<div class="row">
									<div class="col-md-6 col-xs-12">
											<div class="tb-login-form ">
													<h5 class="tb-title">Вход</h5>
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
															<p class="login-submit5">
																	<button type="submit" class="button-primary">Войти</button>
															</p>
													</form>
											</div>
									</div>
									<div class="col-md-6 col-xs-12">
											<div class="tb-login-form res">
													<h5 class="tb-title">Создать новый аккаунт</h5>
													<form action="#">
															<p class="checkout-coupon top log a-an">
																	<label class="l-contact">
																			Имя
																			<em>*</em>
																	</label>
																	<input type='text' title='name' required name="name" />
															</p>
															<p class="checkout-coupon top log a-an">
																	<label class="l-contact">
																			Email
																			<em>*</em>
																	</label>
																	<input type='text' title='email' required pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}' />
															</p>
															<p class="checkout-coupon top log a-an">
																	<label class="l-contact">
																			Номер телефона
																			<em>*</em>
																	</label>
																	<input type='text' required pattern='(?[- .]*){7,13}' title='Введите номер телефона в международном, национальном или локальном формате' />
															</p>
															<p class="checkout-coupon top log a-an">
																	<label class="l-contact">
																			Пароль
																			<em>*</em>
																	</label>
																	<input title='Пароль должен состоять минимум из 8 символов и содержать хотя бы одну цифру и один символ нижнего и верхнего регистра' type='password' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' required />
															</p>
															<p class="login-submit5 ress">
															<button type="submit" class="button-primary">вперед</button>
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