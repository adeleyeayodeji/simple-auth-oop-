<?php
	
	/**
	 * 
	 */
	class Dbh
	{
		//Private properties for base connection
		private static $host = "localhost";
		private static $user = "root";
		private static $pass = "";
		private static $dbname = "simpleauth";
		//protected function connect
		protected function connect()
		{
			$data_source_name = "mysql:host=".self::$host.";dbname=".self::$dbname;
			$conn = new PDO($data_source_name, self::$user, self::$pass);
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return $conn;
		}
	}

?>