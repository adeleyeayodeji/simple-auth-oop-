<?php
	
	/**
	 * 
	 */
	class UserView extends UserController
	{
		public $username;
		protected static $password;
		protected static $usernamecurrent;
		
		public function __construct($username, $password)
		{
			self::$usernamecurrent = $username;
			self::$password = $password;

			$this->username = $this->userControllerAuth(self::$usernamecurrent, self::$password);
			return $this->username;
			
		}
	}

?>