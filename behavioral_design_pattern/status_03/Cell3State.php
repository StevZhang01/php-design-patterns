<?php
//Cell3State.php
class Cell3State implements IMatrix
{
	private $context;

	public function __construct(Context $contextNow)
	{
		$this->context = $contextNow;
	}

	public function goUp()
	{
		// 不合法的移动
	}

	public function goDown()
	{
		echo "<img src='cells/six.png'>";
		$this->context->setState($this->context->getCell6State());
	}

	public function goLeft()
	{
		echo "<img src='cells/two.png'>";
		$this->context->setState($this->context-getCell2State());
	}

	public function goRight()
	{
		//不合法的移动
	}
}
