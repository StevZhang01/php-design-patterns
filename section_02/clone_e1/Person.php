<?php
// Person.php
include_once("CloneMe.php");
class Person extends CloneMe
{
    function __construct()
    {
        $this->picture = "cloneMan.png";
        $this->name = "Original";
    }
   
    function display()
    {
        echo "<img src='$this->picture' />";
        echo "<br>$this->name<p />\n";
    }

    function __clone(){}
}

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "Cloned";
$slacker->display();
