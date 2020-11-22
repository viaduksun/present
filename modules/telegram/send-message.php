<?php
function message_to_telegram($text) {
	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
	// Определяем общее число сообщений в базе данных
	$res = $conn->query("SELECT * FROM telegram");
	while ($row = mysqli_fetch_assoc($res)) {
		$data = [
		'chat_id' => $row['TELEGRAM_CHATID'], //TELEGRAM_CHATID,
		'text' => $text,
		'parse_mode' => "HTML"];
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $row['TELEGRAM_TOKEN'] . '/sendMessage' );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $data ); 

		$result = curl_exec( $ch );
		curl_close( $ch );
	}
}
?>