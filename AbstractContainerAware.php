<?php

	namespace Real\Di;

	abstract class AbstractContainerAware
	{
		private $container;

		public function setContainer($container)
		{
			$this->container = $container;
		}

		public function getContainer()
		{
			return $this->container;
		}
	}