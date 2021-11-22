<html>
	<head>
	</head>
	<body>
		<?php
			$pattern = "/var/www/html/uploads/*.txt";
			// system("cd uplo	ads");
			// $filelist = glob("/var/www/html/uploads/*.txt");
			// print_r($filelist);
			foreach (glob($pattern) as $filename) {
				// echo "$filename размер ".filesize($filename)."\n";
				$data = file_get_contents($filename);
				echo($data);
				echo("<br><hr>");
			}
			// $cnt = system("ls uploads | wc -l");
			// while ($cnt > 0) {

			// }

			// $filename = "/var/www/html/uploads/whatfile_1.txt";
			
			// if (file_exists($filename)) {
			// 	echo 'exists';
			// 	$data = file_get_contents($filename);

			// 	var_dump($data);
			// 	system("ls");
			// }
		?>
	</body>
</html>