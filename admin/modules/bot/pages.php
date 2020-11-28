<?php
/*
пагинация на странице бота в админке
<< < ..2|3|<b>4</b>|5|6.. > >>
*/
// Устанавливаем соединение с базой данных
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/admin/configs/variables.php';
// Извлекаем из URL текущую страницу
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
// Определяем общее число сообщений в базе данных
$result = $conn->query("SELECT COUNT(*) FROM telegram");
$posts = mysqli_fetch_row($result);
$posts = $posts[0];

// Находим общее число страниц
$total = intval(($posts - 1) / $amount_users) + 1;
// Определяем начало сообщений для текущей страницы
$page = intval($page);
// Если значение $page меньше единицы или отрицательно
// переходим на первую страницу
// А если слишком большое, то переходим на последнюю
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
// Вычисляем начиная к какого номера
// следует выводить сообщения
$start = $page * $amount_users - $amount_users;
// Выбираем $amount_users сообщений начиная с номера $start
$result = $conn->query("SELECT * FROM telegram LIMIT $start, $amount_users");
// В цикле переносим результаты запроса в массив $postrow
$offset = ($page - 1) * $amount_users;
//Выводить только 6 товаров
$sql = "SELECT * FROM telegram LIMIT ". $amount_users ." OFFSET " . $offset;
$result = $conn->query($sql);
?>
<?php
while ($row = mysqli_fetch_assoc($result)) {
	include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/bot/bot_tabl.php'; 
}
?>
</table>
<!-- переменные для страниц -->
<?php
$page_activ = null;
$pervpage = null;
$perv2page = null;
$page2left = null;
$page1left = null;
$page1right = null;
$page2right = null;
$nextpage = null;
$next2page = null;
?>

<nav aria-label="Статьи по Bootstrap 4">
	<form name >
		<ul class="pagination justify-content-center">
			<?php
			// Текущая страница
			$page_activ = '<li class="page-item">
			<input type="hidden" value='. ($page) .' id="page_activ">
			<a onclick="pageGet($page)" type="button" class="page-link" href= ./users.php?page='. ($page) .'><b>'. ($page) .'</b></a>
			</li>';
			// Проверяем нужны ли 2 стрелки назад
			if ($page > 2) {
				$perv2page = '<li class="page-item">
				<input type="hidden" value="1" id="perv_page">
				<a onclick="pageGet(1)" class="page-link" href= ./users.php?page=1> << </a></li>';	
			}
			// Проверяем нужна ли стрелка Пред.
			if ($page != 1) {
				$pervpage = '<li class="page-item">
				<input type="hidden" value='. ($page - 1) .' id="pervpage">
				<li class="page-item"><a onclick="pageGet($page - 1)" class="page-link" href= ./users.php?page='. ($page - 1) .'>Пред.</a></li>';	
			}
    		// Проверяем нужны ли стрелка След.
			if ($page != $total) {
				$nextpage = '<li class="page-item">
				<input type="hidden" value='. ($page + 1) .' id="nextpage">
				<a onclick="pageGet($page + 1)" class="page-link" href= ./users.php?page='. ($page + 1) .'>След.</a></li>';
			}
    		// Проверяем нужны ли 2 стрелки вперед
			if ($page + 1 < $total) {
				$next2page = '<li class="page-item">
				<input type="hidden" value='. $total .' id="next_page">
				<li class="page-item"><a onclick="pageGet(total)" class="page-link" href= ./users.php?page=' .$total. '> >> </a></li>';
			}

			// Находим две ближайшие станицы с обоих краев, если они есть
			if($page - 2 > 0) {
				$page2left = '<li class="page-item">
				<a onclick="pageGet($page - 2)" class="page-link" href= ./users.php?page='. ($page - 2) .'>'. ($page - 2) .'</a>
				</li>';
			}
			if($page - 1 > 0) {
				$page1left = '<li class="page-item">
				<a onclick="pageGet($page - 1)" class="page-link" href= ./users.php?page='. ($page - 1) .'>'. ($page - 1) .'</a>
				</li>';
			}
			if($page + 2 <= $total) {
				$page2right = '<li class="page-item">
				<a onclick="pageGet($page + 2)" class="page-link" href= ./users.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>
				</li>';
			}
			if($page + 1 <= $total) {
				$page1right = '<li class="page-item">
				<a onclick="pageGet($page + 1)" class="page-link" href= ./users.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>
				</li>';
			}
		// Вывод меню и текущая страница
			?>
			<!-- <button> -->
				<?php
				echo $perv2page.$pervpage.$page2left.$page1left.$page_activ.$page1right.$page2right.$nextpage.$next2page;
				?>
				<!-- </button> -->
			</ul>
		</form>
	</nav>
