<?php
	session_start();
	include $_SERVER['DOCUMENT_ROOT'].'/model/model_user.php';

	$user_m = new Model_user();

	if (isset($_POST['form_name'])) {
		$name = $_POST['form_name'];
		if ($name == '') {
			unset($name);
		}
	}

	if (isset($_POST['form_password'])) {
		$password = $_POST['form_password'];
		if ($password == '') {
			unset($password);
		}
	}

	$user_m->parse_user_name($name);
	$user_m->parse_user_password($password);

	$rows = $user_m->get_matched_users($name);
	// echo json_encode($user);

	if (empty($rows['password'])) {
		echo "Извините, введённый вами name или пароль неверный. Переход на главную";
		header('Refresh: 5; url="../index.php"');
	} else {
		if ($rows['password'] == $password) {
			$_SESSION['name'] = $rows['name']; 
			$_SESSION['id'] = $rows['id'];
			echo "Вы успешно вошли на сайт как ".$_SESSION['name']." и будете перенаправлены на главную через 5 секунд!";
			header('Refresh: 5; url="../index.php"');
		} else {
			exit ("Извините, введённые вами имя или пароль неверный.");
		}
	}
?>