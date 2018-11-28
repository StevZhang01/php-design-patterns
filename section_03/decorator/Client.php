<?php
// Client.php
function __autoload($class_name)
{
	include_once($class_name . ".php");
}

class Client
{
	private $basicSite;

	public function __construct()
	{
		$this->basicSite = new BasicSite();
		$this->basicSite = $this->wrapComponent($this->basicSite);

		$siteNow = $this->basicSite->getSite();
		$format = "<br>&nbsp;&nbsp;<strong>Total= $";
		$price = $this->basicSite->getPrice();

		echo $siteNow . $format . $price . "</strong></p>";
	}

	private function wrapComponent(IComponent $component)
	{
		$component = new Maintence($component);
		$component = new Video($component);
		$component = new Database($component);

		return $component;
	}
}

$worker = new Client();
