<?php
	class HomePage extends Module
	{
		public function __construct($template)
		{
			parent::__construct($template);
			
			$this->file = sprintf(HTML_DIR, "home");
			$this->title = "Template Page";
		}
	}
?>