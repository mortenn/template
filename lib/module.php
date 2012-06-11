<?php
	class Module
	{
        public function __toString()
        {
			$site = new Template('site');
			$site->title = sprintf(WINDOW_TITLE, $this->title);
			$site->content = $this->content;
			return $site->__toString();
        }

		public function Post()
		{
		}

        protected $title;
		protected $content;
	}
?>