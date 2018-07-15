<?php

    // Запись клиента в БД посредством AJAX
	if(!empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['userPhone'])) {
		echo "Круть!";
	} else {
		echo "Лох штоле?";
	}