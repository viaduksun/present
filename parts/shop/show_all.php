<?php 
 include $_SERVER["DOCUMENT_ROOT"] . "/configs/db.php"; 


if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

	setcookie ("cookie_current_category_id", "", 0, "/");	
}

?>

	