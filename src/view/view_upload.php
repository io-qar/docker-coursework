<?php
	$title_name = 'Загрузить файл';
	include $_SERVER['DOCUMENT_ROOT'].'/templates/template_header.php';
?>
<div id="uploadfile">
	<p>Отправьте txt-файл на сервер</p>
	<form action="/protected/controller_upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file" accept=".txt">
		<input type="submit" name="submit" value="Отправить">
</div>
<?php
	// include $_SERVER['DOCUMENT_ROOT'].'/protected/controller_upload.php';
	include $_SERVER['DOCUMENT_ROOT'].'/templates/template_footer.php';
?>