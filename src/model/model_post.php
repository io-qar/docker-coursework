<?php
	class Model_post {
		private $mysqli;

		public function __construct() {
			include $_SERVER['DOCUMENT_ROOT'].'/model/connect2db.php';
			$this->mysqli = $mysqli;
		}

		private function construct_user($mysqli_result) {
			$posts = $mysqli_result->fetch_all(MYSQLI_ASSOC);
			$ret = array();
			foreach ($posts as $post) {
				$post['content'] = file_get_contents($post["postTargetPath"]);
				// echo json_encode($post);
				array_push($ret, $post);
			}
			return $ret;
		}
		
		function get_posts_for_user($user_id) {
			$result = $this->mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id where users.id = '$user_id'");
			return $this->construct_user($result);
		}
		function get_all_posts() {
			$result = $this->mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id");
			return $this->construct_user($result);
		}
	}
?>