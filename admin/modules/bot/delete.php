<!-- Удаление пользователя в админке из БД -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
$page = "products";
// кнопка нажата
if (isset($_GET["delete"])) {
	$sql = "DELETE FROM telegram WHERE `telegram`.`id` =" . $_GET['id'];
	$result = $conn->query($sql);
	header('Location: http://present.local/admin/pages/bot.php'); 
}
?>