<?php

	/**
	* Класс модели
	*/
	class Model implements IQuery
	{
		
		function __construct()
		{
			# code...
		}

		/* === НАЧАЛО: Реализации интерфейса IQuery === */

		/**
		 * (SELECT запрос) Получение одного ряда из БД
		 * @param string $selectQuery — запрос, оправляемый в серверу
		 * @return array              Результат запроса
		*/
		public static function select_one_row($selectQuery) {
			$selectResult = mysqli_query( Configuration::get_connection(), $selectQuery )
				or die( mysqli_error( Configuration::get_connection() ) );
		
			return mysqli_fetch_assoc($selectResult);
		}

		/**
		 * (SELECT запрос) Получение нескольких рядов из БД
		 * @param  string $selectQuery — запрос, оправляемый в серверу
		 * @return array              Результат запроса
		*/
		public static function select_several_row($selectQuery) {
			$selectResult = mysqli_query( Configuration::get_connection(), $selectQuery )
				or die( mysqli_error( Configuration::get_connection() ) );
			
			$dataFromQuery = array();
			
			while($row = mysqli_fetch_assoc($selectResult)) {
				$dataFromQuery[] = $row;
			}
			
			return $dataFromQuery;
		}

		/**
		 * (CRUD запрос) INSERT or UPDATE or DELETE
		 * @param  string $query — запрос, оправляемый в серверу
		 * @return bool              Если запросы выполенен удачно вернёт true, иначе – false
		*/
		public static function crud_row($query) {
			$insertResult = mysqli_query( Configuration::get_connection(), $insertQuery )
				or die( mysqli_error( Configuration::get_connection() ) );
				
			return $insertResult ? true : false;
		}

		/* === КОНЕЦ: реализации интерфейса IQuery === */
	}

?>