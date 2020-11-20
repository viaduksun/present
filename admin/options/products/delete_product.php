<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

if(isset($_GET["id"])) {
	$sql = "DELETE FROM `products` WHERE `products`.`id`=" . $_GET["id"]; 
	if(mysqli_query($conn, $sql)) {

		header("Location: /admin/pages/products.php");
	}
}


?>