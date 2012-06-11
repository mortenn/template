<?php
	class Module
	{
		public function __construct($name, $data = Array())
        {
            $this->data = $data;

            if (file_exists(sprintf(HTML_DIR, $name)))
                $this->file = sprintf(HTML_DIR, $name);
            else
                $this->file = null;
        }

        public function __get($key)
        {
            if (array_key_exists($key, $this->data))
                return $this->data[$key];

            return null;
        }

        public function __set($key, $value)
        {
            $this->data[$key] = $value;
        }

        public function __toString()
        {
            if ($this->file === null)
                return "Error loading page (Missing template)";

            ob_start();
			
            extract($this->data);
            require($this->file);
			
            return ob_get_clean();
        }

        protected $data;
        protected $file;
	}
?>