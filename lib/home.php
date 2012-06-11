<?php
	class HomePage extends Site
	{
		public function __construct()
		{
			parent::__construct('home');
			$this->header->title = "Template Page";
		}
	}
?>