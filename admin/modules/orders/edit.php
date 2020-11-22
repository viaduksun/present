<!-- Редактирование заказа в админке -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
// кнопка нажата
if (isset($_POST['save'])) {
    $sql = "UPDATE `orders` SET `status` = '". $_POST['status'] ."' WHERE `orders`.`id` =" . $_POST['order_id'];
    if ($conn->query($sql)) {
        header("location: /admin/pages/orders.php");
    } else {
        echo "Ошибка";
    }
}
include $_SERVER["DOCUMENT_ROOT"] . '/admin/parts/header.php';
?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Редактирование заказа</h2>
                    <p><a href="/admin/">Главная</a> | <a href="/admin/pages/orders.php">Заказы</a> | Редактирование заказа</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- shopping-cart content section start -->
<div class="shopping-cart-area s-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <?php 
                $sql = "SELECT * FROM orders WHERE id =" . $_GET['id'];
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                $users = mysqli_fetch_assoc($conn->query("SELECT * FROM users WHERE id='" . $row['user_id'] . "'"));
                $basket = json_decode($row['products'], true);
                ?>
                <!-- таблица информации о пользователе по заказу -->
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="text">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row">
                                        <form method="POST" action="edit.php">
                                            <div class="checkbox-form">
                                                <div class="col-md-12">
                                                    <h3 class="checkbox9">Детали заказа</h3>
                                                    <input value="<?php echo $row['id']?>" name="order_id" type="hidden" class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                            ФИО
                                                        </label>
                                                        <input class="form-control" value="<?php echo $users['name']?>" type="text" required="" name="name" pattern="^[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+\s+[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+\s+[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+$" placeholder="ФИО"> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                            Адресс електроной почты
                                                        </label>
                                                        <input class="form-control" value="<?php echo $users['email']?>" name="email" type='email' title='email' required pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}' placeholder="email@em.ru"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                            Моб. телефон
                                                        </label>
                                                        <input class="form-control" value="<?php echo $row['phone']?>" name="phone" type='phone' required pattern='(?[- .]*){7,13}' title='Введите номер телефона в международном, национальном или локальном формате' placeholder="+380935858328"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                            Адрес новой почты
                                                        </label>
                                                        <input class="form-control" value="<?php echo $row['address']?>" type="text" required="" name="address"  placeholder="Street address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                            Заметки
                                                        </label>
                                                        <textarea class="input-text" name="details" placeholder="<?php echo $row['details']?>" disabled></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="di-na bs">
                                                        <label>Статус заказа</label>
                                                        <select class="form-control" name ="status">
                                                            <option value="<?php echo $row['status']?>">
                                                                <?php echo $row['status']; ?>
                                                            </option>;
                                                            <option value="Новый">Новый</option>
                                                            <option value="В обработке">В обработке</option>
                                                            <option value="Отправлен клиенту">Отправлен клиенту</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="buttons clearfix">
                                                    <div class="form-row text-center">
                                                     <button name="save" value="1" type="submit" class="btn btn-primary ce5">Сохранить изменения</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Информаци о товаре в заказе -->
                 <div class="col-md-5 col-sm-12">
                    <div class="ro-checkout-summary cart-card">
                        <div class="ro-title">
                            <h3 class="checkbox9 my-margin-bottom-0">ЗАКАЗ № <?php echo $row['id']?></h3>
                        </div>
                        <?php
                        for ($i = 0; $i < count($basket['basket']); $i += 1){
                            $productSql = "SELECT * FROM products WHERE id = " . $basket['basket'][$i]['product_id'];
                            $productResult = $conn->query($productSql);
                            $product = mysqli_fetch_assoc($productResult);
                            ?>
                            <div class="ro-body">
                                <div class="ro-item">
                                    <div class="ro-image">
                                        <a href="#">
                                            <img src="/img/products/<?php echo $product["image"] ?>" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <div class="tb-beg">
                                            <a href="#"><?php echo $product["title"] ?></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ro-price">
                                            <span class="amount all-sum"><?php echo ($product["price"]) ?> грн.</span>
                                        </div>
                                        <div class="ro-quantity">
                                            <strong class="product-quantity">× <?php echo $basket['basket'][$i]['quant'] ?></strong>
                                        </div>
                                        <div class="product-total">
                                            <span class="amount all-sum"><?php echo ($product["price"]*$basket['basket'][$i]['quant']) ?> грн.</span>
                                            <input type="hidden" class="form-control" value="<?php echo $sum = $sum + ($product["price"]*$basket['basket'][$i]['quant']) ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="ro-footer">
                            <div class="ro-title order-total">
                                <p>
                                    Общая стоимость:
                                    <span>
                                        <strong>
                                            <span class="amount all-sum sum"><?php echo $sum?> грн.</span>
                                        </strong>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- shopping-cart  content section end -->

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/footer.php"
?>