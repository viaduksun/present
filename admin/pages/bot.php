<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER["DOCUMENT_ROOT"] . '/admin/parts/header.php';
?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Телеграм-бот</h2>
                    <p><a href="/admin/">Главная</a> | Телеграм-бот</p>
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
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed  method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Информация о получателях<i class="fa fa-caret-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                                <div class="easy2">
                                    <!-- <h2>Users Account Information</h2> -->
                                    <!-- <div class="shop5">
                                        <label>Show :</label>
                                        <select class="select">
                                            <option value="5" selected>5</option>
                                            <option value="10">10</option>
                                            <option value="50">50</option>
                                        </select>      
                                    </div> -->
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <div class="buttons clearfix">
                                            <div class="pull-right">
                                                <a class="btn btn-info g6" href="../modules/bot/add.php">Добавить</a><br>
                                            </div>
                                        </div><br>                                           
                                            <tr>
                                                <tr>
                                                    <th class="text-center" scope="col">№</th>
                                                    <th class="text-center" scope="col">Имя пользователя</th>
                                                    <th class="text-center" scope="col">ID пользователя</th>
                                                    <th class="text-center" scope="col">TOKEN телеграм-бота</th>
                                                    <th class="text-center" scope="col">Действия</th>
                                                </tr>
                                            </tr>
                                        </thead>
                                        <!-- Пагинация. Выводим таблицу пользователей по 5 на странице -->
                                        <?php
                                        include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/bot/pages.php';
                                        ?>

                                        <!-- </table> -->
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