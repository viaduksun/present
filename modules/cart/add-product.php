<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
	if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_COOKIE['basket'])) {
			$addBasket = json_decode($_COOKIE['basket'], true);
			$productIsFind = 0;
			var_dump($addBasket);
			for ($i = 0; $i < count($addBasket['basket']); $i += 1) {
				if ($addBasket['basket'][$i]['product_id'] == $_POST['id']) {
					var_dump($addBasket['basket'][$i]['product_id']);
					var_dump($_POST['id']);
					$addBasket['basket'][$i]['quant'] += 1;
					$productIsFind += 1;
				}
			}
			if ($productIsFind != 1) {

				$addBasket['basket'][] = 
						['product_id' => $_POST['id'],
							'quant' => 1
						];
			}
		} else {
			$addBasket = [
				'basket' => [
					['product_id' => $_POST['id'],
						'quant' => 1
					]
				]
			];
		}
		$basket = json_encode($addBasket);
		setcookie('basket', '', 0, '/');
		setcookie('basket', $basket, time() + 60*60*24*7, '/');
	}
?>