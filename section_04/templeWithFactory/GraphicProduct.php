<?php
// GraphicProduct.php
include_once("IProduct.php");
class GraphicProduct implements IProduct
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = "<img src='pix/modig.png'>";
		return $this->mfgProduct;
	}
}
