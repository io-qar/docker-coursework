<html>
	<head>
	</head>
	<body>
		<?php
			session_start();
			include 'connect2db.php';
			$schema = $schema.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			// echo $schema;
			if ($schema == "localhost/model/user-page.php") {
				$id = $_SESSION["id"];
				$result = $mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id where users.id = '$id'");
				// echo 1;
			} else {
				$result = $mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id");
			}

			$posts = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($posts as $post) {
				// echo json_encode($post);

				$author = $post["name"];
				$data = file_get_contents($post["postTargetPath"]);
				// fileowner($post) = $_SESSION["name"];
				echo "Автор поста:".$author."\n";
				echo $data;
				// $meta = get_meta_tags($post);
				// echo $meta["size"];
				echo "<br><hr>";
			}
		?>
	</body>
</html>