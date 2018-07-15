<?php

	// Ответ на AJAX запрос
	
	function insert_statement() {
		global $connection;
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		$insertQuery = "INSER INTO Statements(Name, Email, Phone)
									   VALUES('$name', '$email', '$phone')";
		
		$insertResult = mysqli_query($connection, $insertQuery)
			or die(mysqli_error($connection));
			
		return $insertResult ? true : false;
	}

	// Ответ на AJAX запрос
	
	if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) ) {
		
		if( insert_statement() ) {
			echo "Вы успешно записались на осмотр вашей квартиры";
		} else {
			echo "Вам неудалось записаться на осмотр квартиры";
		}
	} else {
		echo "Вам неудалось записаться на осмотр квартиры";
	}