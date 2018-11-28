<?php
//Cell7State.php
class Cell7State implements IMatrix
{
	private $context;

	public function __construct(Context $contextNow)
	{
		$this->context = $contextNow;
	}

	public function goUp()
	{
		echo "<img src='cells/four.png'>";
		$this->context->setState($this->context->getCell4State());
	}

	public function goDown()
	{
		//不合法的移动
	}

	public function goLeft()
	{
		//不合法的移动
	}
	
	public function goRight()
	{
		echo "<img src='cells/eight.png'>";
		$this->context->setState($this->context->getCell8State());
	}
}
