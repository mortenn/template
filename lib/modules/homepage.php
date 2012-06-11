<?php
	class HomePage extends Module
	{
		public function __construct()
		{
			$this->content = new Template('home');
			$this->title = 'Template Page';
		}
	}
?>