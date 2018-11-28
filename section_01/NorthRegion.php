<?php
include_once("IAbstract.php");

class NorthRegion extends IAbstract
{
    // 必须返回十进制
    protected function giveCost()
    {
        return 210.54;
    }
    // 必须返回字符串值
    protected function giveCity()
    {
        return "Moose Breath";
    }
}


