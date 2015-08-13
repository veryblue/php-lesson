<?php

class FileLogger
{
	private $path = '';

	public function __construct($path)
	{
		$this->setPath($path);
	}

	public function setPath($path)
	{
		$this->path = $path;
	}

	public function log($message)
	{
		file_put_contents($this->path, $message . PHP_EOL, FILE_APPEND);
		// PHP_EOL     # 改行
		// FILE_APPEND # 第3引数に記述すると追記モード
	}

}