<?php
// Database.php
include_once("Decorator.php");
class Database extends Decorator
{
	public function __construct(IComponent $siteNow)
	{
		$this->site = $siteNow;
	}

	public function getSite()
	{
		$fmat = "<br>&nbsp;&nbsp;MySQL Database ";
		return $this->site->getSite() . $fmat;
	}

	public function getPrice()
	{
		return 800 + $this->site->getPrice();
	}
}
