<?php
	session_start();
	include $_SERVER['DOCUMENT_ROOT'].'/model/model_upload.php';
	$upload_m = new Model_upload();

	function upload_file() {
		if ($upload_m->set_params_upload() == $upload_m->allowTypes) {
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $this->targetDir.$basename($_FILES["file"]["name"])) {
				$mime = mime_content_type($targetFilePath);
				$result = $mysqli->query("insert into posts (postAuthorId, postTargetPath) values ('$postAuthorId', '$targetFilePath')");
				echo $result, $mysqli->error;
				if ($result) {
					$statusMsg = "Файл '".$fileName."'успешно загружен! Вы будете перенаправлены на главную страницу через 5 секунд!";
					header('Refresh: 5; url="../index.php"');
				}
			} else {
				$statusMsg = "Не удалось загрузить файл из-за ошибки №".$_FILES["file"]["error"];
			}
		} else {
			$statusMsg = 'Разрешено загружать только файлы PDF!';
		}
	}
	echo $statusMsg;
?>