<?php
	class Model_db extends Model {
		public $mysqli;

		public function __constructor() {
			$this->mysqli = new mysqli('db', 'user', 'password', 'courseDB');
		}

		public function conn_check($mysqli) {
			if ($mysqli->connect_error) {
				die('Connect Error ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
			}
		}
	}
?>