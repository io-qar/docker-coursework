<?php
	class Model_File extends Model {
		public $schema;

		public function __constructor() {
			$this->schema = $schema.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}

		// echo $schema;
		public get_data($schema) {
			if ($schema == "localhost/model/user-page.php") {
				$id = $_SESSION["id"];
				$posts =  $mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id where users.id = '$id'");
			} else {
				$posts = $mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id");
			}

			$posts->get_post()->fetch_all(MYSQLI_ASSOC);
			foreach ($posts as $post) {
				// echo json_encode($post);

				$author = $post["name"];
				$data = file_get_contents($post["postTargetPath"]);
				echo "Автор поста:".$author."\n";
				echo $data;
				// $meta = get_meta_tags($post);
				// echo $meta["size"];
				echo "<br><hr>";
			}
		}
	}
?>