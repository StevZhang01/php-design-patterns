<?php
//Cell8State.php
class Cell8State implements IMatrix
{
	private $context;

	public function __construct(Context $contextNow)
	{
		$this->context = $contextNow;
	}

	public function goUp()
	{
		echo "<img src='cells/five.png'>";
		$this->context->setState($this->context->getCell5State());
	}

	public function goDown()
	{
		//不合法的移动
	}
	
	public function goLeft()
	{
		echo "<img src='cells/seven.png'>";
		$this->context->setState($this->cotnext->getCell7State());
	}

	public function goRight()
	{
		echo "<img src='cells/nine.png'>";
		$this->context->setState($this->context->getCell9State());
	}
}
