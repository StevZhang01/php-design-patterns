<?php

class DoText
{
    private $textNum;
    private $fullFace;

    public function numToText($num)
    {
        $this->textNum = (string)$num;
        return $this->textNum;
    }

    public function addFace($face, $msg)
    {
        $this->fullFace = "<strong>" . $face . "</strong>: " . $msg . "\n";
        return $this->fullFace;
    }
}
