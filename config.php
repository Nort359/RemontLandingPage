<?php

	// Хост
	define('HOST', 'localhost');
	
	define('USER', 'root');
	
	define('PASS', '');
	
	define('DB', 'Remont');
	
	$connection = mysqli_connect(HOST, USER, PASS, DB)
		or die(mysqli_connect_error() . ' Test');
		
	mysqli_set_charset($connection, 'utf8')
		or die("Неудалось установить кодировку");