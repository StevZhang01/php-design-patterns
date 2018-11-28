<?php
// Moldova.php
include_once("FormatHelper.php");
include_once("Product.php");
class MoldovaProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;
    public function getProperties()
    {
        $this->countryNow = file_get_contents("CountryWriteups/Moldova.txt");
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= "<img class='pixRight' src='Countries/Moldova.gif'>";
        $this->mfgProduct .= "<header>Moldova</header>";
        $this->mfgProduct .= "<p>$this->countryNow</p>";
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}
