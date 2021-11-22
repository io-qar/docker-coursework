<html>
	<head>Загрузка поста</head>
	<body>
		<div id="uploadfile">
			<p>Отправьте txt-файл на сервер</p>
			<form action="/protected/upload.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file" accept=".txt">
				<input type="submit" name="submit" value="Отправить">
			</form>
			<p>Файлы на сервере:</p>
			<?php
				$result = shell_exec('cd .. && cd .. && cd uploads && ls && cd ..');
				echo str_replace(" ", "\n", $result);
			?>
		</div>

		<?php
			$statusMsg = '';
			$targetDir = "/var/www/html/uploads/";
			$fileName = basename($_FILES["file"]["name"]);
			$targetFilePath = $targetDir.$fileName;
			$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

			if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
				$allowTypes = array('txt');
				if (in_array($fileType, $allowTypes)) {
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
						$mime = mime_content_type($targetFilePath);
						$statusMsg = "Файл '".$fileName."'успешно загружен! Вы будете перенаправлены на главную страницу через 5 секунд!";
						header('Refresh: 5; url="../index.php"');
					} else {
						$statusMsg = "Не удалось загрузить файл из-за ошибки №".$_FILES["file"]["error"];
					}
				} else {
					$statusMsg = 'Разрешено загружать только файлы PDF!';
				}
			}
			echo $statusMsg;
		?>
	</body>
</html>