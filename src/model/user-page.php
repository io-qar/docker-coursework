<html>
	<head>
		<title>Страница</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/styles/main.css">
		<?php session_start(); ?>
	</head>
	<body>
		<header class="header">
			<div class="header__content">
				<nav class="navbar">
					<a href="/index.php" class="nav__item">На главную</a>
					<a href="/protected/upload.php" class="nav__item">Загрузить пост</a>
				</nav>
			</div>
		</header>
		<?php
			echo '<p>Ваше имя: '.$_SESSION["name"].'</h1>';
		?>
		<p>Изменить имя?</p>
		<form action="/protected/change-name.php" method="post">
			<label>Ваше новое имя:<br></label>
			<input name="newName" type="text" size="50" maxlength="50">
			<input type="submit" name="submit" value="Изменить">
		</form>
	</body>
</html>