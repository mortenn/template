<?php
	class Module
	{
        public function __toString()
        {
			$site = new Template('site');
			$site->title = sprintf(WINDOW_TITLE, $this->title);
			$site->content = $this->content;
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
				$this->Post();
			
			return $site->__toString();
        }

		public function Post()
		{
			//Override me
		}

        protected $title;
		protected $content;
	}
?>