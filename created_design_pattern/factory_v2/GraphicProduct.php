<?php
include_once("Product.php");
class GraphicProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct .= "<title>Map Factory</title>";
        $this->mfgProduct .= "</head><body>";
        $this->mfgProduct .= "<img src='Mali.gif'>";
        $this->mfgProduct .= "</body></html>";
        return $this->mfgProduct;
    }
}
