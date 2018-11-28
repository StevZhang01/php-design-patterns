<?php
include_once("IAbstract.php");

class WestRegion extends IAbstract
{
    // 必须返回十进制
    protected function giveCost()
    {
        $solarSaving = 2;
        $this->valueNow = 210.54 / $solarSaving;
        return $this->valueNow;
    }
    // 必须返回字符值
    protected function giveCity()
    {
        return "Rettlesnake Gulch";
    }
}
