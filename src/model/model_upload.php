<?php
	class Model_upload {
		private $mysqli, $statusMsg, $targetDir, $postAuthorId, $allowTypes;

		public function __construct() {
			include 'connect2db.php';
			$this->mysqli = $mysqli;
			$this->statusMsg = '';
			$this->targetDir = "/var/www/html/uploads/";
			$this->postAuthorId = $_SESSION["id"];
			$this->allowTypes = "txt";
		}
		
		public function set_msg($status) {
			$this->statusMsg = $status;
		}
		public function get_msg() {
			return $this->statusMsg;
		}

		function set_params_upload() {
			if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
				return $fileType = pathinfo($this->targetDir.$basename($_FILES["file"]["name"], PATHINFO_EXTENSION));
			}
		}
	}
?>