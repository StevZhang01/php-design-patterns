<?php
//Cell4State.php
class Cell4State implements IMatrix
{
	private $context;

	public function __construct(Context $contextNow)
	{
		$this->context = $contextNow;
	}

	public function goUp()
	{
		echo "<img src='cells/one.png'>";
		$this->context-setState($this->context-getCell4State());
	}

	public function goDown()
	{
		echo "<img src='cells/seven.png'>";
		$this->context-setState($this->context-getCell7State());
	}

	public function goLeft()
	{
		// 不合法的移动
	}

	public function goRight()
	{
		echo "<img src='cells/five.png'>";
		$this->context-setState($this->context->getCell5State());
	}
}
