<?php
	class Controller_User extends Controller {

		function __construct() {
			$this->model = new Model_Login();
			$this->view = new View();
		}

		function action_index() {
			$this->view->generate('user_view.php', 'template_view.php', $data);
		}
	}
?>