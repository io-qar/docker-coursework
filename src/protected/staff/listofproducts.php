<?php
	$mysqli = new mysqli("db", "user", "password", "appDB");
	$sql_check = "SELECT * FROM users WHERE grp = 'users'";
	$result_check = $mysqli->query($sql_check);
	foreach ($result_check as $row) {
		$name = $row['name']; 
		$pass = $row['pass'];
		if ($_SERVER['PHP_AUTH_USER'] != $name and $_SERVER['PHP_AUTH_PW'] != $pass) {
			echo '';
		} else {
			echo 'Доступ запрещён!';
			exit();
		}
	}
?>
<html>
	<head>
		<title>Список товаров</title>
		<link rel="stylesheet" href="/protected/styles/style.css" type="text/css"/>
		<link rel="stylesheet" href="/protected/styles/dark.css" id="theme-link" type="text/css">
	</head>
	<body>
		<!-- <div class="theme-button" id="theme-button">Тёмная тема</div> -->
		<div class="container">
			<h1>Список продуктов</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Продукт</th>
					<th>Стоимость</th>
				</tr>
				<?php
					$sql = 'SELECT * FROM products';
					$result = $mysqli->query($sql);
					foreach ($result as $row) {
						echo "
							<tr>
								<td>{$row['ID']}</td>
								<td>{$row['product']}</td>
								<td>{$row['price']}</td>
							</tr>
						";
					}
					$user_name = $_SERVER['PHP_AUTH_USER'];
					$getc = $_GET['id'];
					$getproduct = $_GET['product'];
					$getprice = $_GET['price'];
					if ($getc != '') {
						$sql3 = "INSERT INTO orders (user, product, price) VALUES ('$user_name', '$getproduct', '$getprice')";
						$result3 = $mysqli->query($sql3);
					}
					echo "\nКоличество выбранных продуктов: ".$getc;
				?>
			</table>
		</div>
		<!-- <script type="text/javascript" src="/protected/change-theme.js"></script> -->
	</body>
</html>