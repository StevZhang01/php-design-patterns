<?php
// Creator.php
abstract class  Creator
{
	abstract protected function factoryMethod();

	public function doFactory()
	{
		$mfg = $this->factoryMethod();
		return $mfg;
	}
}

