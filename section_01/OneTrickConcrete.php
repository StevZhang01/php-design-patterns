<?php

include_once('OneTrickAbstract.php');

class OneTrickConcrete extends OneTrickAbstract
{
    public function trick($whatever)
    {
        $this->storeHere = 25;
        $quarter = $whatever * 100;
        return($quarter / $this->storeHere);
    }
}

$worker = new OneTrickConcrete();
echo $worker->trick(1);

?>

