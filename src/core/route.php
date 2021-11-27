<?php
	// require_once('controller.php');
	// class Route {
	// 	static function start() {
	// 		// контроллер и действие по умолчанию
	// 		$controller_name = 'Main';
	// 		$action_name = 'index';
			
	// 		$routes = explode('/', $_SERVER['REQUEST_URI']);

	// 		// получаем имя контроллера
	// 		if (!empty($routes[2])) {	
	// 			$controller_name = $routes[2];
	// 		}
			
	// 		// получаем имя экшена
	// 		if (!empty($routes[3])) {
	// 			$action_name = $routes[3];
	// 		}

	// 		// добавляем префиксы
	// 		$model_name = 'model_'.$controller_name;
	// 		$controller_name = 'controller_'.$controller_name;
	// 		$action_name = 'action_'.$action_name;

	// 		// подцепляем файл с классом модели (файла модели может и не быть)

	// 		$model_file = strtolower($model_name).'.php';
	// 		$model_path = "models/".$model_file;
	// 		if (file_exists($model_path)) {
	// 			include "models/".$model_file;
	// 		}

	// 		// подцепляем файл с классом контроллера
	// 		$controller_file = strtolower($controller_name).'.php';
	// 		$controller_path = "controllers/".$controller_file;
	// 		if (file_exists($controller_path)) {
	// 			include "controllers/".$controller_file;
	// 		}
			
	// 		// создаем контроллер
	// 		$controller = new $controller_name;
	// 		$action = $action_name;
			
	// 		if (method_exists($controller, $action)) {
	// 			$controller->$action();
	// 		}
	// 	}
	// }
?>