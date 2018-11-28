<?php
//Cell2State.php
class Cell2State implements IMatrix
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
		echo "<img src='cells/five.png'>";
		$this->context->setState($this->context->getCell5State());
	}

	public function goLeft()
	{
		echo "<img src='cells/one.png'>";
		$this->context->setState($this->context->getCell1State());
	}

	public function goRight()
	{
		echo "<img src='cells/three.png'>";
		$this->context->setState($this->context->getCell3State());
	}
}
