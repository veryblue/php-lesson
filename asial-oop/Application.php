<?php

class Application
{
	private $logger;

	public function setLogger(FileLogger $logger)
	{
		$this->logger = $logger;
	}

	public function log($message)
	{
		$this->logger->log($message);
	}
}

