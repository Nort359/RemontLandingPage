<?php

	set_include_path(get_include_path() . PATH_SEPARATOR . 'classes');

	function __autoload($class_load) {
		require_once $class_load . '.php';
	}

	require_once "functions/functions.php";
	require_once "model/model.php";
	
	$view = isset($_GET['view']) ? $_GET['view'] : 'action';
	
	$admin = get_admin();
	
	$action = get_action();
	
	
	// Время акции
	if(isset($_POST['send-action'])) {
		
		if($_POST['text-action']) {
			$text_action = $_POST['text-action'];
		
			$action_days = $_POST['action-days'] ? $_POST['action-days'] : 0;
			
			if($_POST['action-hours'] >= 24) {
				$action_hours = 0;
			} else {
				$action_hours = $_POST['action-hours'] ? $_POST['action-hours'] : 0;
			}
			
			if($_POST['action-minutes'] >= 60) {
				$action_minutes = 0;
			} else {
				$action_minutes = $_POST['action-minutes'] ? $_POST['action-minutes'] : 0;
			}
			
			$action_count_users = $_POST['action-count-users'] ? $_POST['action-count-users'] : 100;
			
			update_action($text_action, $action_days, $action_hours, $action_minutes, $action_count_users)
				or die("Неудалось обновить запись");
				
			header("Location: {$_SERVER['PHP_SELF']}");
		}
	}
	
	// Получение объектов ремонта
	$objects = get_objects();	
	
	// Получение объектов ремонта для админки
	$objects_admin = get_objects();
	
	// Удаление объекта
	if(isset($_GET['act']) && $_GET['act'] == 'delete') {
		if(!empty($_GET['id_object'])) {
			$id_obj = abs( (int)$_GET['id_object'] );
			
			delete_object($id_obj);
			
			header("Location: http://remont/iamadmin.php?view=objects");
		}
	}
	
	// Получение изменяющего объекта
	if($_GET['view'] == "change_obj") {
		if(!empty($_GET['id_object'])) {
			$id_obj = abs( (int)$_GET['id_object'] );
			
			$current_object = get_current_object($id_obj);
		}
	}
	
	// Изменение текущего объекта
	if(isset($_POST['send_update_object'])) {
		
		if(!empty($_FILES)) {
			$img_path = 'users_files/objects/object-' . abs( (int)$_GET['id_object']);
			
			move_uploaded_file($_FILES['file-img-object']['tmp_name'], $img_path);
		} else {
			$img_path = NULL;
		}
		
		$title_object = $_POST['title-object'];
		$description_object = $_POST['description-object'];
		
		$date_object = $_POST['date-object'];
		
		$id_obj = abs( (int)$_GET['id_object'] );
		
		update_current_object($title_object, $description_object, $date_object, $img_path, $id_obj)
			or die("Неудалось обновить ряд");
		
		header("Location: http://remont/iamadmin.php?view=objects");
	}
	
	// Добавление нового объекта
	if(isset($_POST['send_add_object'])) {
		$img_path = 'users_files/objects/object-' . rand(1, 1000000);
		
		move_uploaded_file($_FILES['file-img-object-add']['tmp_name'], $img_path);
	
		$title_object = $_POST['title-object-add'];
		$description_object = $_POST['description-object-add'];
		
		$date_object = $_POST['date-object-add'];
		
		insert_object($title_object, $description_object, $date_object, $img_path)
			or die("Неудалось вставить ряд");
		
		header("Location: http://remont/iamadmin.php?view=objects");
	}
	
	// Управление сеткой
	
	$grid = 2;
	
	if($_POST['grid-send']) {
		update_count_grid();
	}
	
	$grid = get_count_grid();
	
	foreach($grid as $item) {
		$grid = $item;
	}
	
	$grid = round(12 / $grid);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	