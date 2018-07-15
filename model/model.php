<?php
	
	// Получение одного ряда из БД
	function select_one_row($selectQuery) {
		$selectResult = mysqli_query( Configuration::get_connection(), $selectQuery )
			or die( mysqli_error( Configuration::get_connection() ) );
		
		return mysqli_fetch_assoc($selectResult);
	}
	
	// Получение нескольких рядов из БД
	function select_several_row($selectQuery) {
		$selectResult = mysqli_query( Configuration::get_connection(), $selectQuery )
			or die( mysqli_error( Configuration::get_connection() ) );
		
		$dataFromQuery = array();
		
		while($row = mysqli_fetch_assoc($selectResult)) {
			$dataFromQuery[] = $row;
		}
		
		return $dataFromQuery;
	}

	// Ответ на AJAX запрос
	function insert_statement() {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		$insertQuery = "INSER INTO Statements(Name, Email, Phone)
									   VALUES('$name', '$email', '$phone')";
		
		$insertResult = mysqli_query( Configuration::get_connection(), $insertQuery )
			or die( mysqli_error( Configuration::get_connection() ) );
			
		return $insertResult ? true : false;
	}

	// Получение данных о админе
	function get_admin() {
		$selectQuery = "SELECT Login, Password
								FROM Admin
									LIMIT 1";
								
		return select_one_row($selectQuery);
	}

	// Получение акции
	function get_action() {
		$selectQuery = "SELECT *
							FROM Action
								LIMIT 1";
								
		return select_one_row($selectQuery);
	}
	
	// Обновление акции
	function update_action($text_action, $action_days, $action_hours, $action_minutes, $action_count_users) {
		$updateQuery = "UPDATE Action
							SET TextAction = '$text_action',
								days = $action_days,
								hours = $action_hours,
								minutes = $action_minutes,
								count_users = $action_count_users";
								
		$updateResult = mysqli_query( Configuration::get_connection(), $updateQuery )
			or die( mysqli_error( Configuration::get_connection() ) );
		
		return $updateResult ? true : false;
	}
	
	// Получение объектов
	function get_objects($limit = false) {
		$selectQuery = "SELECT *
							FROM Objects";
		
		if($limit) {
			$selectQuery .= " LIMIT $limit";
		}
							
		return select_several_row($selectQuery);
	}
	
	// Удаление оюъекта
	function delete_object($idObject) {
		$deleteQuery = "DELETE
							FROM Objects
								WHERE IdObjects = $idObject";
								
		$deleteResult = mysqli_query( Configuration::get_connection(), $deleteQuery)
			or die( mysqli_error( Configuration::get_connection() ) );
			
			
		return $deleteResult ? true : false;
	}
	
	// Получение изменяющего объекта
	function get_current_object($id_obj) {
		$selectQuery = "SELECT Header, Description, Date_object
							FROM Objects
								WHERE IdObjects = $id_obj";
								
		return select_one_row($selectQuery);
	}
	
	// Изменение текущего объекта
	function update_current_object($title_object, $description_object, $date_object, $img_path, $id_obj) {
		
		if($img_path) {
			$updateQuery = "UPDATE Objects
								SET Header = '$title_object',
								Description = '$description_object',
								Date_object = '$date_object',
								img = '$img_path'
									WHERE IdObjects = $id_obj";
		} else {
			$updateQuery = "UPDATE Objects
								SET Header = '$title_object',
								Description = '$description_object',
								Date_object = '$date_object'
									WHERE IdObjects = $id_obj";
		}
							
		$updateResult = mysqli_query( Configuration::get_connection(), $updateQuery)
			or die( mysqli_error( Configuration::get_connection() ) );
		
		return $updateResult ? true : false;
	}
	
	// Добавление нового объекта
	function insert_object($title_object, $description_object, $date_object, $img_path) {
		$insertQuery = "INSERT INTO Objects(Header, Description, Date_object, img)
							VALUES('$title_object', '$description_object', '$date_object', '$img_path')";
									 
		$insertResult = mysqli_query( Configuration::get_connection(), $insertQuery)
			or die( mysqli_error( Configuration::get_connection() ) );
		
		return $insertResult ? true : false;
	}
	
	// Обновление грида объектов
	function update_count_grid() {
		$grid_count = $_POST['grid-count'] < 0 || $_POST['grid-count'] > 3 ? 2 : $_POST['grid-count'];
		
		$updateQuery = "UPDATE Grid
							SET Count_grid = $grid_count";
							
		$updateResult = mysqli_query( Configuration::get_connection(), $updateQuery)
			or die( mysqli_error( Configuration::get_connection() ) );
			
		return $insertResult ? true : false;
	}
	
	// Получение грида
	function get_count_grid() {
		$selectQuery = "SELECT Count_grid
							FROM Grid
								LIMIT 1";
		
		return select_one_row($selectQuery);
	}
	
	
	
	
	
	
	
	
	
	
	