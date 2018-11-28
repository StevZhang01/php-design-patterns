<?php
include_once("TextFactory.php");
include_once("GraphicFactory.php");
class Client
{
    private $someTextObject;
    private $someGraphicObject;
    public function __construct()
    {
        $this->someGraphicObject = new GraphicFactory();
        echo $this->someGraphicObject->startFactory() . "\n";
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory() . "\n";
    }
}

$worker = new Client();
