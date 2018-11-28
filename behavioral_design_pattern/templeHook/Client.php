<?php
// Client.php
function __autoload($class_name)
{
	include $class_name . ".php";
}

class Client
{
	private $buyTotal;
	private $gpsNow;
	private $mapNow;
	private $boatNow;
	private $special;
	private $tempCalc;

	function __construct()
	{
		$this->setHtml();
		$this->setCost();
		$this->tempCalc = new ZambeziCalc();
		$this->tempCalc->templateMethod($this->buyTotal, $this->special);
	}

	private function setHtml()
	{
		$this->gpsNow = $_POST['gps'];
		$this->mapNow = $_POST['map'];
		$this->boatNow = $_POST['boat'];
	}

	private function setCost()
	{
		$this->buyTotal = $this->gpsNow;

		foreach($this->mapNow as $value) {
			$this->buyTotal += $value;
		}

		$this->special = ($this->buyTotal >= 200);

		$this->buyTotal += $this->boatNow;
	}
}

$worker = new Client();
