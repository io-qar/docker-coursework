<?php
	$title_name = 'Ваша страница';
	include $_SERVER['DOCUMENT_ROOT'].'/templates/template_header.php';
	echo '<p>Ваше имя: '.$_SESSION["name"].'</p>';
?>
<p>Изменить имя?</p>
<form action="/protected/change-name.php" method="post">
	<label>Ваше новое имя:<br></label>
	<input name="newName" type="text" size="50" maxlength="50">
	<input type="submit" name="submit" value="Изменить">
</form>
<h2>Ваши посты</h2>
<?php
	include $_SERVER['DOCUMENT_ROOT'].'/protected/controller_file-reader.php';
	include $_SERVER['DOCUMENT_ROOT'].'/templates/template_footer.php';
?>