<?php
//Cell1State.php
class Cell1State implements IMatrix
{
	private $context;

	public function __construct(Context $contextNow)
	{
		$this->context = $contextNow;
	}

	public function goUp()
	{
		//不合法的移动
	}

	public function goDown()
	{
		echo "<img src='cells/four.png'>";
		$this->context->setState($this->context->getCell4State());
	}

	public function goLeft()
	{
		//不合法的移动
	}

	public function goRight()
	{
		echo "<img src='cells/two.png'>";
		$this->context->setState($this->context->getCell2State());
	}
}
