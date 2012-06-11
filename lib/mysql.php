<?php
	class mysql
	{
		public function __construct()
		{
			$this->connection = mysql_connect($this->host, $this->user, $this->password);
			$this->selectDB = mysql_select_db($this->database, $this->connection);
		}
		
		public function executeQuery($query)
		{
			if (mysql_query($query))
				return true;
			
			return false;
		}
		
		public function getQuery($query)
		{
			if ($result = mysql_query($query))			
				if (is_resource($result))
					return $result;
			
			return false;
		}
		
		public function getError()
		{
			return mysql_error();
		}
		
		private $host = "localhost";
		private $user = "fquizzes";
		private $password = "PiZRE0bUYBcVL0P6pVwX";
		private $database = "fundraisingquizzes";
		private $connection;
		private $selectDB;
	}
?>