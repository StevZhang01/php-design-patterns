<?php

class GetSet
{
    private $dataWarehouse;

    public function __construct()
    {
        $this->setter(200);
        $got = $this->getter();
        echo $got . "\n";
    }
    private function getter()
    {
        return $this->dataWarehouse;
    }

    private function setter($setValue)
    {
        $this->dataWarehouse = $setValue;
    }
}

$worker = new GetSet();
