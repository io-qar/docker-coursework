<?php
	session_start();
	class Model_user {
		private $mysqli;
		// private $user_name;

		public function __construct() {
			include $_SERVER['DOCUMENT_ROOT'].'/model/connect2db.php';
			$this->mysqli = $mysqli;
			// $this->user_name = $_SESSION["name"];
		}

		public function username_val_check($form_name) {
			// if (isset($_POST[$form_name])) {
			// 	$name = $_POST[$form_name];
			// 	if ($name == '') {
			// 		unset($name);
			// 	} else {
			// 		return $name;
			// 	}
			// }
		}
		public function userpassword_val_check($form_password) {
			// if (isset($_POST[$form_password])) {
			// 	$password = $_POST[$form_password];
			// 	if ($password == '') {
			// 		unset($password);
			// 	} else {
			// 		return $password;
			// 	}
			// }
			// if (empty($name) or empty($password)) {
			// 	exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
			// }
		}

		public function parse_user_name($form_name) {
			$name = stripslashes($form_name);
			$name = htmlspecialchars($name);
			$name = trim($name);
		}

		public function parse_user_password($form_password) {
			$password = stripslashes($form_password);
			$password = htmlspecialchars($password);
			$password = trim($password);
		}

		function get_matched_users($name) {
			$result = $this->mysqli->query("SELECT * FROM users WHERE name = '$name'");
			return $result->fetch_array();
		}
	}
?>