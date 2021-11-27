<?php
	echo '<p>Ваше имя: '.$_SESSION["name"].'</h1>';
?>
<p>Изменить имя?</p>
<form action="/controllers/change-name.php" method="post">
	<label>Ваше новое имя:<br></label>
	<input name="newName" type="text" size="50" maxlength="50">
	<input type="submit" name="submit" value="Изменить">
</form>
<h3>Ваши посты:</h3>
