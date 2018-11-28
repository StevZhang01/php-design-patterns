<?php
// Creator.php
abstract class Creator
{
    protected abstract function factoryMethod(Product $product);
    public function doFactory(Product $productNow)
    {
        $countryProduct = $productNow;
        $mfg = $this->factoryMethod($countryProduct);
        return $mfg;
    }
}
