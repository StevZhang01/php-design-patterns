<?php

include_once("Proxy.php");

class ClientProxy
{
    private $subject;
    private $un;
    private $pw;

    public function __construct($un, $pw)
    {
        $this->un = $un;
        $this->pw = $pw;
        $this->subject = new Proxy();
        $this->runSubject($this->subject);
    }

    protected function runSubject(ISubject $subject)
    {
        $subject->login($this->un, $this->pw);
    }
}


$woker = new ClientProxy("professional", "acp");
