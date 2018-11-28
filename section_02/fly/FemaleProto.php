<?php
// FemaleProto.php
include_once("IPrototype.php");
class FemaleProto extends Iprototype
{
    const gender = "FEMALE";
    public $fecundity;
    public function __construct()
    {
        $this->eyeColor = "red";
        $this->wingBeat = 220;
        $this->unitEyes = 760;
    }
    public function __clone(){}
}
