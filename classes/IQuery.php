<?php

	interface IQuery {
		/**
		 * (SELECT запрос) Получение одного ряда из БД
		 * @param string $selectQuery — запрос, оправляемый в серверу
		 * @return array              Результат запроса
	 	*/
		static function select_one_row($selectQuery);

		/**
		 * (SELECT запрос) Получение нескольких рядов из БД
		 * @param  string $selectQuery — запрос, оправляемый в серверу
		 * @return array              Результат запроса
		*/
		static function select_several_row($selectQuery);

		/**
		 * (CRUD запрос) INSERT or UPDATE or DELETE
		 * @param  string $query — запрос, оправляемый в серверу
		 * @return bool              Если запросы выполенен удачно вернёт true, иначе – false
		*/
		static function crud_row($query);
	}

?>