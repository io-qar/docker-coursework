<html>
<head>
	<title><?php echo $title_name; ?></title>
	<link rel="stylesheet" href="/styles/main.css">
	<?php
		session_start();
	?>
	</head>
	<body>
		<header class="header">
			<div class="header__content">
				<nav class="navbar">
					<?php
						if (isset($_SESSION['name'])) {
							echo '<a href="/view/view_user-page.php" class="nav__item">Ваш профиль</a>';
							echo '<a href="/protected/logout.php" class="nav__item">Выйти из аккаунта</a>';
						} else {
							echo '<a href="/view/view_reg.php" class="nav__item">Зарегистрироваться</a>';
							echo '<a href="/view/view_login.php" class="nav__item">Войти</a>';
						}
					?>
				</nav>
			</div>
		</header>