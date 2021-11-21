<?php
	// session_start();
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		if ($name == '') {
			unset($name);
		}
	} //заносим введенный пользователем логин в переменную $name, если он пустой, то уничтожаем переменную
	
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
		if ($password == '') {
			unset($password);
		}
	}
	//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	
	if (empty($name) or empty($password)) {//если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
		exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
	}
	
	//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
	$name = stripslashes($name);
	$name = htmlspecialchars($name);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
 	
	//удаляем лишние пробелы
	$name = trim($name);
	$password = trim($password);
 	
	// подключаемся к базе
	include "connect2db.php";
	// проверка на существование пользователя с таким же логином
	$result = $mysqli->query("SELECT id FROM users WHERE name = '$name'");
	$myrow = $result->fetch_array();

	if (!empty($myrow['id'])) {
		exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
	}
	
	// если такого нет, то сохраняем данные
	$result2 = $mysqli->query("INSERT INTO users (name, password) VALUES ('$name', '$password')");
	// Проверяем, есть ли ошибки
	if ($result2 === True) {
		echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт";
	} else {
		echo "Ошибка! Вы не зарегистрированы.";
	}
?>