<!-- Удаление заказа в админке из БД -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
// кнопка нажата
if (isset($_GET["delete"])) {
	$sql = "DELETE FROM orders WHERE `orders`.`id` =" . $_GET['id'];
	$result = $conn->query($sql);
	header('Location: http://present.local/admin/pages/orders.php'); 
}
?>