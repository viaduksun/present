<?php

	include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php";
	include $_SERVER['DOCUMENT_ROOT'] . "/configs/configs.php";
	include $_SERVER['DOCUMENT_ROOT'] . "/modules/telegram/send-message.php";

	if(isset($_POST["order"])  && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_COOKIE["basket"])){
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
		$addOrderSql = "INSERT INTO `orders` (`user_id`, `products`, `details`, `address`, `status`,  `phone`) VALUES ('" . $user_id . "', '" . $_COOKIE['basket'] . "', '" . $_POST["details"] . "', '" . $_POST["address"] . "', 'Новый', '" . $_POST["phone"] . "')";

		$order_id = mysqli_fetch_assoc($conn->query("SELECT id FROM orders WHERE id=(SELECT max(id) FROM orders)"));
		if($conn->query($addOrderSql)){
			$order = json_decode($_COOKIE['basket'], true);
			$sentence = "";
			$sum = 0;
			for ($i = 0; $i < count($order['basket']); $i += 1){
				$product = mysqli_fetch_assoc($conn->query("SELECT * FROM products WHERE id = " . $order['basket'][$i]["product_id"]));
				$sentence .= $product['title'] . ' - ' . $order['basket'][$i]["quant"] . ' шт. ';
				$sum = $sum + ($product['price'] * $order['basket'][$i]["quant"]);
				if (($product["count"] - $order['basket'][$i]["quant"]) == 0) {
					$conn->query("UPDATE `products` SET `count` = '" . ($product["count"] - $order['basket'][$i]["quant"]) . "', `availability` = '0' WHERE `products`.`id` = " . $order['basket'][$i]["product_id"]);
				} else {
					$conn->query("UPDATE `products` SET `count` = '" . ($product["count"] - $order['basket'][$i]["quant"]) . "' WHERE `products`.`id` = " . $order['basket'][$i]["product_id"]);
				}
			}
			message_to_telegram('Новый заказ номер ' . ($order_id['id'] + 1) . ' от ' . $_POST["name"] . '. На сумму: ' . $sum . ' грн.. Продукция: ' . $sentence . '. Мобильный телефон клиента: ' . $_POST["phone"]);
			setcookie("basket", "", 0, "/");
			header("Location: /pages/cart.php");
		}
	}
?>