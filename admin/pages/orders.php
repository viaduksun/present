<?php
include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/header.php"
?>
<!-- pages-title-start -->
<section class="contact-img-area">
  <div class="container">
    <div class="row">
     <div class="col-md-12 text-center">
      <div class="con-text">
        <h2 class="page-title">Заказы</h2>
        <p><a href="/admin/">Главная</a> | Заказы</p>
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
                                    <a class="collapsed  method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Информация по заказам<i class="fa fa-caret-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                                <div class="easy2">
                                    <!-- <h2>Orders Information</h2> -->
                                    <!-- <div class="shop5">
                                        <label>Кол-во на странице:</label>
                                        <select class="select">
                                            <option value="5" selected>5</option>
                                            <option value="10">10</option>
                                            <option value="50">50</option>
                                        </select>      
                                    </div> -->
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <tr>
                                                    <th class="text-center" scope="col">№ Заказа</th>
                                                    <th class="text-center" scope="col">ФИО</th>
                                                    <th class="text-center" scope="col">Телефон</th>
                                                    <th class="text-center" scope="col">Заметки к заказу</th>
                                                    <th class="text-center" scope="col">Дата заказа</th>
                                                    <th class="text-center" scope="col">Адрес доставки</th>
                                                    <th class="text-center" scope="col">Статус заказа</th>
                                                    <th class="text-center" scope="col">Действия</th>
                                                </tr>
                                            </tr>
                                        </thead>
                                        <!-- Пагинация. Выводим таблицу пользователей по 5 на странице -->
                                        <?php
                                        include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/orders/pages.php';
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