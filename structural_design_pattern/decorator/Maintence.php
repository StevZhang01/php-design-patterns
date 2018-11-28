<?php
// Maintence.php
include_once("Decorator.php");
class Maintence extends Decorator
{
	public function __construct(IComponent $siteNow)
	{
		$this->site = $siteNow;
	}

	public function getSite()
	{
		$fmat = "<br>&nbsp;&nbsp;Maintence ";
		return $this->site->getSite() . $fmat;
	}

	public function getPrice()
	{
		return 950 + $this->site->getPrice();
	}
}
