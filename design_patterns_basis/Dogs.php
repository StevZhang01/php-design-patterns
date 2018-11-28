<?php

include_once("FurryPets.php");

class Dogs extends FurryPets
{
    public function __construct()
    {
        echo "Dogs " . $this->fourlegs . "\n";
        echo $this->makesSound("Woof, woof") . "\n";
        echo $this->guardsHouse();
    }

    private function guardsHouse()
    {
        return "Grrrrr";
    }
}

