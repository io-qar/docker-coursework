<?php
	class Model_user extends Model {
		public $id;
		public $name;
		public $password;

		public function __constructor() {
			if (isset($_POST['name'])) {
				$this->name = $_POST['name'];
				if ($this->name == '') {
					unset($this->name);
				}
			}
			if (isset($_POST['password'])) {
				$this->password = $_POST['password'];
				if ($this->password == '') {
					unset($this->password);
				}
			}
		}
		
		public function get_data($name, $mysqli) {
			$result = $mysqli->query("SELECT * FROM users WHERE name = '$name'");
			$myrow = $result->fetch_array();
			return $myrow;
			// return $mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id where users.id = '$id'");
		}

		public function login($myrow, $password) {
			// $myrow = $this->get_user($name);

			if (empty($myrow['password'])) {
				exit ("Извините, введённый вами name или пароль неверный.");
			} else {
				if ($myrow['password'] == $password) {
					$_SESSION['name'] = $myrow['name']; 
					$_SESSION['id'] = $myrow['id'];
					// echo "Вы успешно вошли на сайт как ".$_SESSION['name']." и будете перенаправлены на главную через 5 секунд!";
					// header('Refresh: 5; url="../index.php"');
				} else {
					exit ("Извините, введённый вами name или пароль неверный.");
				}
			}
		}

		public function reg($myrow, $name, $password) {
			if (!empty($myrow['id'])) {
				exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
			}
		
			// $result2 = $mysqli->query("INSERT INTO users (name, password) VALUES ('$name', '$password')");
			if ($result2) {
				echo "Вы успешно зарегистрированы! Перенапрвление на главную через 5 секунд";
				header('Refresh: 5; url="../index.php"');
			} else {
				echo "Ошибка! Вы не зарегистрированы.";
			}
		}

		public function validate($name, $password) {
			$name = stripslashes($name);
			$name = htmlspecialchars($name);
			$password = stripslashes($password);
			$password = htmlspecialchars($password);
			$name = trim($name);
			$password = trim($password);
		}

		
	}
?>