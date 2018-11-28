<?php

include_once("Dogs.php");
include_once("Cats.php");

class ClientPets
{
    public function  __construct()
    {
        $dogs = new Dogs();
        $cats = new Cats();
    }
}

$worker = new ClientPets();
