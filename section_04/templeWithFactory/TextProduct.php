<?php
// TextProduct.php
include_once("IProduct.php");
class TextProduct implements IProduct
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = "<div style='color: #cc0000; font-size: 16px; font-family: Verdana, Geneva, sans-serif'><strong><em>Caption: </em></strong>Modigliani paineted elongated faces.</div>";
		return $this->mfgProduct;
	}
}
