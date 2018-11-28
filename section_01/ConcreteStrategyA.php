<?php
include_once("IStrategy.php");
class ConcreteStrategyA extends IStrategy
{
    public function algorithm($elements)
    {
        echo "---$elements---\n";
    }
}


