<?php
	
	/**
	* Класс соединение с базой данны
	* Реализован по шаблону SingleTon
	*/
	class Configuration
	{
		private static $connection;

		const HOST = 'localhost';
		const USER = 'root';
		const PASSWORD = '';
		const DB_NAME = 'Remont';

		private function __construct()
		{ }

		/**
		 * get_connection() — статисечкий метод, реализация SingleTon
		 * @return resourse соединение с БД
		 */
		public static function get_connection() {
			if( self::$connection != NULL ) {
				return self::$connection;
			}

			self::$connection = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DB_NAME)
				or die("Неудалось подключиться к базе данных");

			mysqli_set_charset(self::$connection, 'utf8')
				or die("Неудалось установить кодировку");

			return self::$connection;
		}
	}

?>