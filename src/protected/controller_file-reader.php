<?php
	session_start();
	include $_SERVER['DOCUMENT_ROOT'].'/model/model_post.php';
	$post_m = new Model_post();

	$schema = $_SERVER["REQUEST_URI"];

	if ($schema == "view/user-page.php") {
		$id = $_SESSION["id"];
		$posts = $post_m->get_posts_for_user($id);
	} else {
		$posts = $post_m->get_all_posts();
	}
	
	foreach ($posts as $post) {

		$author = $post["name"];
		$data = $post["content"];
		echo "Автор поста:".$author."\n";
		echo $data;
		echo "<br><hr>";
	}
?>