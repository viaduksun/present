<!-- Редактирование бота в админке -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
// кнопка нажата
if (isset($_GET['save'])) {
// INSERT INTO `telegram` (`id`, `TELEGRAM_CHATID`, `TELEGRAM_TOKEN`) VALUES (NULL, '1007659188', '1455822037:AAEBAZqmtX7BUN3jmsBTywqUX01P8NGPIEA');
// UPDATE `telegram` SET `name` = '@HandyMadeUA' WHERE `telegram`.`id` = 2;
    $sql = "UPDATE telegram SET name = '" . $_GET["name"] . "', TELEGRAM_CHATID = '" . $_GET["TELEGRAM_CHATID"] . "', TELEGRAM_TOKEN = '" . $_GET["TELEGRAM_TOKEN"] . "' WHERE telegram.id =" . $_GET['id'];
    $result = $conn->query($sql);
    header('Location: /admin/pages/bot.php');
}
include $_SERVER["DOCUMENT_ROOT"] . '/admin/parts/header.php';
?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Редактирование телеграмм-бота</h2>
                    <p><a href="/admin/">Главная</a> | <a href="/admin/pages/bot.php">Телеграмм-бот</a> | Редактирование телеграмм-бота</p>
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
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Редактирование телеграмм-бота<i class="fa fa-caret-down"></i></a>
                                    </h4>
                                </div>
                                <!-- таблица информации о пользователе -->
                                <div id="collapseTwo" class="panel-collapse collapse  in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                    <div class="row">
                                        <div class="easy2">
                                            <!-- <h2>User Account Information</h2> -->
                                            <form class="form-horizontal" action="edit.php" method="GET">
                                                <?php 
                                                $sql = "SELECT * FROM telegram WHERE id =". $_GET["id"];
                                                $result = $conn->query($sql);
                                                $row = mysqli_fetch_assoc($result);
                                                ?>
                                                <fieldset>
                                                    <!-- <legend>User Personal Details</legend> -->
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">№</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['id']?>" name="id" type="text" disabled>
                                                            <input class="form-control" value="<?php echo $row['id']?>" name="id" type="hidden">
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label">Имя пользователя</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="name" value="<?php echo $row['name']?>" type="text" placeholder="Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label">ID пользователя</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['TELEGRAM_CHATID']?>" name="TELEGRAM_CHATID" type="text" placeholder="<?php echo $row['TELEGRAM_CHATID']?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label">TOKEN телеграм-бота</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="<?php echo $row['TELEGRAM_TOKEN']?>" name="TELEGRAM_TOKEN" type="text" placeholder="<?php echo $row['TELEGRAM_TOKEN']?>" required>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="buttons clearfix">
                                                    <div class="pull-left">
                                                        <a class="btn btn-default ce5" href="../../pages/bot.php">Назад</a>
                                                    </div>
                                                    <div class="pull-right">
                                                        <button name="save" value="1" type="submit" class="btn btn-primary ce5">Сохранить</button>
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
        </section>
        <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/footer.php"
        ?>