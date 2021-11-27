<?php
	session_start();
	include 'connect2db.php';
	$name = $_SESSION["name"];
	$id = $_SESSION["id"];
	$newName = $_POST["newName"];

	$name = stripslashes($newName);
	$name = htmlspecialchars($newName);

	$result = $mysqli->query("update users set name = '$newName' where id = '$id'");

	if ($result) {
		$_SESSION["name"] = $newName;
		echo 'Вы успешно сменили имя на '.$_SESSION["name"].' и будете перенаправленеы в профиль через 5 секунд!';
		header('Refresh: 5; url="../model/user-page.php"');
	} else {
		exit("Извините, не удалось сменить имя на '$newName'!");
	}
?>