<?php

	namespace Real\Di;

	class Container
	{
		private $services;

		public function set($name, $resolver)
		{
			$this->services[$name] = $resolver;
			return $this;
		}

		public function get($name)
		{
			if (is_callable($this->services[$name])) {
				$this->services[$name] = call_user_func($this->services[$name]);
			}

			return $this->services[$name];
		} 

		public function has($key)
		{
			if (isset($this->services[$key])) {
				return true;
			} else {
				return false;
			}
		}
	}