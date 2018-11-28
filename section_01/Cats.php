<?php

include_once("FurryPets.php");

class Cats extends FurryPets
{
    public function __construct()
    {
        echo "Cats " . $this->fourlegs() . "\n";
        echo $this->makesSound("Meow, purrr") . "\n";
        echo $this->ownsHouse();
    }

    private function ownsHouse()
    {
        return "I'll just walk on this keyborad." . "\n";
    }
}
