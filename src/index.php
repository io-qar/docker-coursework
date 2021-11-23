<html>
	<head>
		<title>Главная</title>
		<link rel="stylesheet" href="/styles/main.css">
		<?php
			session_start();
		?>
	</head>
	<body>
		<header class="header">
			<div class="header__content">
				<nav class="navbar">
					<a href="/view/reg.html" class="nav__item">Зарегистрироваться</a>
					<a href="/view/login.html" class="nav__item">Войти</a>
					<?php
						if (isset($_SESSION['name'])) {
							echo '<a href="/model/user-page.php" class="nav__item">Ваш профиль</a>';
						}
					?>
					<a href="/protected/logout.php" class="nav__item">Выйти из аккаунта</a>
				</nav>
			</div>
		</header>
		<?php
			if (isset($_SESSION['name'])) {
				echo '<h1>Добро пожаловать, '.$_SESSION['name'].'!</h1>';
			} else {
				echo '<h1>Добро пожаловать!</h1>';
			}
		?>
		<h2>Недавние посты</h2>
		<hr>
		<?php
			include 'protected/file-reader.php';
		?>
	</body>
</html>