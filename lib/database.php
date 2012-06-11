<?php
	define('DB_RESULT_SET', 0);
	define('DB_RESULT_ROW', 1);
	define('DB_RESULT_COL', 2);
	define('DB_RESULT_ONE', 3);
	define('DB_RESULT_EXEC', 4);

	class Database
	{
		public function __construct()
		{
			$this->db = DB::Connect(DATABASE);
			if(PEAR::isError($this->db))
				die($db->getMessage());
		}

		public function query($sql, $param = array(), $mode = DB_RESULT_SET)
		{
			$res = null;
			switch($mode)
			{
				case DB_RESULT_SET:
					$res = $this->db->getAll($sql, $param, DB_FETCHMODE_OBJECT);
					break;

				case DB_RESULT_ROW:
					$res = $this->db->getRow($sql, $param, DB_FETCHMODE_OBJECT);
					break;

				case DB_RESULT_COL:
					$res = $this->db->getCol($sql, 0, $param);
					break;

				case DB_RESULT_ONE:
					$res = $this->db->getOne($sql, $param);
					break;

				case DB_RESULT_EXEC:
					$res = $this->db->query($sql, $param);
					break;
			}
			$this->lastResult = $res;
			if(PEAR::isError($res))
			{
				trigger_error($res->getDebugInfo(), E_USER_ERROR);
				return null;
			}

			return $res;
		}
		
		private $db;
		private $lastResult;
	}
?>