<?php

    // Запись клиента в БД посредством AJAX
	if(!empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['userPhone'])) {
		echo "Ok";
	} else {
		echo "Что-то пошло не так";
	}