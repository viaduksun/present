<?php
	// setcookie("basket", {"basket" : {}})
	// && isset($_COOKIE["basket"])

	include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php";

	if(isset($_POST["order"])  && $_SERVER["REQUEST_METHOD"] == "POST"){
		$findUserSql = "SELECT * FROM users WHERE email LIKE '" . $_POST["email"] . "'";
		$findResult = $conn->query($findUserSql);
		$quantituFind = $findResult->num_rows;
		$user_id = 0;
		
		if($quantituFind  == 0){
			$registrateSql = "INSERT INTO users (name, email) VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "')";
			$regisrateResul = $conn->query($registrateSql);
			$user_id = 	$conn->insert_id;
		}else{
			$user = mysqli_fetch_assoc($findResult);
			$user_id = $user["id"];
		}
		$addOrderSql = "INSERT INTO `orders` (`user_id`, `products`, `details`, `address`, `status`,  `phone`) VALUES ('" . $user_id . "', 'cookie', '" . $_POST["details"] . "', '" . $_POST["address"] . "', 'Новый', '" . $_POST["phone"] . "')";
		if($conn->query($addOrderSql)){
			setcookie("basket", "", 0, "/");
			header("Location: /pages/cart.php");
		}
	}
?>