<?php
// PrimitiveWrap.php
class PrimitiveWrap
{
	private $wrapMe;

	public function __construct($prim)
	{
		$this->wrapMe = $prim;
	}

	public function showWrap()
	{
		return $this->wrapMe;
	}
}

$myPrim = 521;
$wrappedUp = new PrimitiveWrap($myPrim);
echo $wrappedUp->showWrap();
