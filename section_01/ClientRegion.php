<?php
include_once("NorthRegion.php");
include_once("WestRegion.php");

class ClientRegion
{
    public function __construct()
    {
        $north = new NorthRegion();
        $west = new WestRegion();
        $this->showInterface($north);
        $this->showInterface($west);
    }

    private function showInterface(IAbstract $region)
    {
        echo $region->displayShow() . "\n";
    }
}

$worker = new ClientRegion();
