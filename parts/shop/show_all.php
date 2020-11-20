<?php 
 include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php"; 


if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

	setcookie ("cookie_current_category_id", "", 0, "/");
	// =========================
	// Настройка пагинации
	// =========================
	if(!isset($_GET['page'])) $page = 1; else $page = $_GET['page'];

	$count_query = $conn->query("SELECT COUNT(*) FROM products");
	$count_array = $count_query->fetch_array(MYSQLI_NUM);
	$count = $count_array[0];


	$limit = 6;
	$start = ($page*$limit)-$limit;
	$length = ceil($count/$limit);
	// echo $length;
	$p = 1;

	$sql = "SELECT * FROM products LIMIT $start, $limit";
	$result = $conn->query($sql);                                                     

	while ($row = mysqli_fetch_assoc($result)) {
	include 'product_card.php';
	} 

	
}
// header("Location: /pages/shop.php");
?>

	