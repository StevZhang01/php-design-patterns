<?php

include_once("ISubject.php");
class RealSubject extends ISubject
{
    protected function request()
    {
        echo "RealSubject Request!\n";
    }
}
