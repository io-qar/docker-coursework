<html>
	<head>
		<title>Главная</title>
		<link rel="stylesheet" href="protected/styles/main.css">
		<?php
			session_start();
			session_name('index');
		?>
	</head>
	<body>
		<header class="header">
			<div class="header__content">
				<nav class="navbar">
					<a href="/protected/getcoffee/getcoffee.php" class="nav__item">Войти</a>
					<a href="/protected/staff/adminpanel.php" class="nav__item">Админам</a>
					<a href="/protected/functions/upload.php" class="nav__item">Загрузить пост</a>
				</nav>
			</div>
		</header>
		<h1>Welcome</h1>
		<h2>Недавние посты</h2>
		<hr>
		<?php
			include_once 'file-reader.php';
		?>
	</body>
</html>