<?php

include_once("ProtectVis.php");

class ConcreteProtect extends ProtectVis
{
    public function __construct()
    {
        $this->countMoney();
    }

    protected function countMoney()
    {
        $this->wage = "Your hourly wage is $";
        echo $this->wage . $this->setHourly(36) . "\n";
    }
}

$worker = new ConcreteProtect(); 
