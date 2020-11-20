<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
	if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_COOKIE['basket'])) {
			$basket = json_decode($_COOKIE['basket'], true);
			for ($i = 0; $i < count($basket['basket']); $i += 1) {
				if ($basket['basket'][$i]['product_id'] == $_POST['id']) {
					unset($basket["basket"][$i]);
					sort($basket["basket"]);
				}
			}
			setcookie('basket', '', 0, '/');
			$basketNew = json_encode($basket);
			setcookie('basket', $basketNew, time() + 60*60*24*7, '/');
			if (count($basket['basket']) == 0) {
				setcookie('basket', '', 0, '/');
			}
		}
	}
?>