<?php
// TmAb.php
abstract class TmAb
{
	protected $pix;
	protected $cap;

	public function templeMethod()
	{
		$this->addPix();
		$this->addCaption();
	}

	abstract protected function addPix();
	abstract protected function addCaption();
}
