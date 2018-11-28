<?php
// Client.php
function __autoload($class_name)
{
    include $class_name . ".php";
}
class Client
{
    private $fly1;
    private $fly2;
    private $c1fly;
    private $c2fly;
    private $updatedCloneFly;
    public function __construct()
    {
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();
        $this->c1fly = clone $this->fly1;
        $this->c2fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->fly2;

        $this->c1fly->mated = true;
        $this->c2fly->fecundity = 186;
        $this->updatedCloneFly->eyeColor = "purpe";
        $this->updatedCloneFly->wingBeat = 220;
        $this->updatedCloneFly->unitEyes = 750;
        $this->updatedCloneFly->fecundity = 92;

        $this->showFly($this->c1fly);
        $this->showFly($this->c2fly);
        $this->showFly($this->updatedCloneFly);
    }
    private function showFly(IPrototype $fly)
    {
        echo "Eye clolor: " . $fly->eyeColor . "<br/>";
        echo "Wing beats/second; " . $fly->wingBeat . "<br/>";
        echo "Eye units: " . $fly->unitEyes . "<br/>";
        $genderNow = $fly::gender;
        echo "Gender: " . $genderNow . "<br/>";
        if($genderNow == "FEMALE")
        {
            echo "Number of eggs: " . $fly->fecundity . "<br/>";
        }
        else
        {
            echo "Mated: " . $fly->mated . "<br/>";
        }
        echo "<hr>";
        echo "\n";
    }
}

$worker = new Client();
