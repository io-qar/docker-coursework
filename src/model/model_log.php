<?php
	class Model_log {
		private $name, $password;
	}

	public function __construct() {
		include $_SERVER['DOCUMENT_ROOT'].'/model/connect2db.php';
	}

	function logout() {
		unset($_SESSION[$this->name]);
		session_destroy();
	}

?>