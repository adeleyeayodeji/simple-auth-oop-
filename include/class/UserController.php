<?php
	
	/**
	 * 
	 */
	class UserController extends UserModel
	{
		//Controller pivate properties
		private static $username;
		private static $password;
		
		protected function userControllerAuth($username, $password)
		{
			self::$username = $username;
			self::$password = $password;

		  return $this->userModelAuth(self::$username, self::$password);
		}
	}

?>