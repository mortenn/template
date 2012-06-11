<?php
	class Site extends Module
	{
		public function __construct($page)
		{
			parent::__construct($page);
			
			$this->header = new DefaultHeader();
			$this->footer = new DefaultFooter();
		}
	}
?>