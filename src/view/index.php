<?php
	$title_name = 'Главная';
	include $_SERVER['DOCUMENT_ROOT'].'/templates/template_header.php';
	if (isset($_SESSION['name'])) {
		echo '<h1>Добро пожаловать, '.$_SESSION['name'].'!</h1>';
	} else {
		echo '<h1>Добро пожаловать!</h1>';
	}
?>
<h2>Недавние посты</h2>
<hr>
<?php
	include 'protected/controller_file-reader.php';
	include $_SERVER['DOCUMENT_ROOT'].'/templates/template_footer.php';
?>