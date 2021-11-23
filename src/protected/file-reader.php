<html>
	<head>
	</head>
	<body>
		<?php
			session_start();
			include 'connect2db.php';
			
			$result = $mysqli->query("select users.name, posts.postTargetPath from users join posts on posts.postAuthorId = users.id");
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