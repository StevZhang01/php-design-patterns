<?php

include_once("IProduct.php");

class CitrusStore implements IProduct
{
    public function apples()
    {
        return "CitrusStore sez--We do not sell apples. \n";
    }

    public function oranges()
    {
        return "CitrusStore sez--We have citrus fruit. \n";
    }
}
