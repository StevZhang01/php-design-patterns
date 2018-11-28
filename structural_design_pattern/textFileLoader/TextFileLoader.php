<?php
// TextFileLoader.php
class TextFileLoader
{
	private $textNow;
	public function __construct($textFile)
	{
		$this->textNow = file_get_contents($textFile);
		echo $this->textNow;
	}
}

$worker = new TextFileLoader("celery.txt");
