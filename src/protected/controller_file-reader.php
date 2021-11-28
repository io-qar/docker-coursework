<?php
	include $_SERVER['DOCUMENT_ROOT'].'/model/model_post.php';
	$post_m = new Model_post();

	$schema = $_SERVER["REQUEST_URI"];

	if ($schema == "/view/view_user-page.php") {
		$id = $_SESSION["id"];
		$posts = $post_m->get_posts_for_user($id);
	} else {
		$posts = $post_m->get_all_posts();
	}
	
	if (empty($posts)) {
		echo '<h3>Упс, похоже, не загружено ни одной новости!</h3>';
	} else {
		foreach ($posts as $post) {
			$author = $post["name"];
			$data = $post["content"];
			$postId = $post["postId"];
			echo "Автор поста: <b>".$author."</b>, номер новости: <b>".$postId."</b><br>";
			echo $data;
			echo "<br><hr>";
		}
	}
	
?>