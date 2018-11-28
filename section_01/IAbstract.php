<?php
abstract class IAbstract
{
    // 对所有实现都可用的属性
    protected $valueNow;
   
    /* 所有实现都必须包含以下两个方法 */
    // 必须返回十进制值
    abstract protected function giveCost();
    // 必须返回字符串值
    abstract protected function giveCity();

    // 这个具体函数对所有类实现都可用而不覆盖内容
    public function displayShow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
        return $allTogether; 
    }
    
}
