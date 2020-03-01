<?php
	
	/**
	 * 
	 */
	class UserModel extends Dbh
	{
		//Model rpivate properties
		private static $username;
		private static $password;

		protected function userModelAuth($username, $password)
		{
			//setting new values for our properties
			self::$username = $username;
			self::$password = $password;

			//Query the base
			$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
			$query = $this->connect()->prepare($sql);
			$query->execute([self::$username, self::$password]);
			$result = $query->fetch();
			$count = $query->rowCount();

			//Check if user is existing or not
			if ($count >= 1) {
				return $result->username;
			}else{
				return "user not found";
			}
		}
	}

?>