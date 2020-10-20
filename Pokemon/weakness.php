<?php
include "energyType.php";

class weakness extends energyType
{
    private $energyType;
    private $multiplier;

    function __construct($energyType, $multiplier)
    {
        $this->energyType = new energyType($energyType);
        $this->multiplier = $multiplier;
    }

    public function getName()
    {
        return $this->energyType;
    }

    public function getMultiplier()
    {
        return $this->multiplier;
    }
}