<?php
  include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php";   
// сюда из JS в переменную  $_POST передан ID выбранной категории
  if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

$current_category_id = $_POST['current_category_id'];
setcookie ("cookie_current_category_id", $current_category_id, time()+60*60, "/");
	// =========================
	// Настройка пагинации
	// =========================
	if(!isset($_GET['page'])) $page = 1; else $page = $_GET['page'];

	$count_query = $conn->query("SELECT COUNT(*) FROM products WHERE category =" . $_POST['current_category_id']);
	$count_array = $count_query->fetch_array(MYSQLI_NUM);
	$count = $count_array[0];

	$limit = 6;
	$start = ($page*$limit)-$limit;
	$length = ceil($count/$limit);
	// echo $length;

	$p = 1;

	$sql = "SELECT * FROM products  WHERE category =" . $_POST['current_category_id'] ." LIMIT $start, $limit";
	$result = $conn->query($sql);                                                     

	while ($row = mysqli_fetch_assoc($result)) {

	include 'product_card.php';
	} 
}
?>

