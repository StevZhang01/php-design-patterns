<?php
// IAcmePrototype.php
abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    abstract function setDept($orgCode);
    abstract function getDept();

    public function setName($emName)
    {
        $this->emName = $emName;
    }
    public function getName()
    {
        return $this->emName;
    }
    public function setId($emId)
    {
        $this->id = $emId;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setPic($ePic)
    {
        $this->employeePic = $ePic;
    }
    public function getPic()
    {
        return $this->employeePic;
    }
    abstract function __clone();
}
