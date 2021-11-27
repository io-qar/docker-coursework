<html>
	<head>
		<meta charset="utf-8">
		<title>Главная</title>
		<link rel="stylesheet" type="text/css" href="/styles/main.css">
		<script type="text/javascript" src="scripts/button-up.js"></script>
		<script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>
		<header class="header">
			<div class="header__content">
				<nav class="navbar">
					<?php
						if (isset($_SESSION['name'])) {
							echo '<a href="/models/user-page.php" class="nav__item">Ваш профиль</a>';
							echo '<a href="/controllers/logout.php" class="nav__item">Выйти из аккаунта</a>';
						} else {
							echo '<a href="/views/reg.html" class="nav__item">Зарегистрироваться</a>';
							echo '<a href="/views/login.html" class="nav__item">Войти</a>';
						}
					?>
				</nav>
			</div>
		</header>
		<?php
			include 'views/'.$content_view;
		?>
	</body>
</html>