<?php
//ZambeziCalc.php
class ZambeziCalc extends IHook
{
	protected function addTax()
	{
		$this->fullCost = $this->purchased + $this->purchased*.7;
	}

	protected function addShippingHook()
	{
		if(!$this->hookSpecial) {
			$this->fullCost += 12.5;
		}
	}

	protected function displayCost()
	{
		echo "Your full coast is $this->fullCost";
	}
}
