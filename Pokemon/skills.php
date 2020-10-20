<?php

class skills
{
    private $name;
    private $damage;
    private $type;


    function __construct($name, $damage, $type){
        $this->name = $name;
        $this->damage = $damage;
        $this->type = $type;
    }

    public function getName(){
        return $this->name;
    }
    public function getDamage(){
        return $this->damage;
    }
    public function getType(){
        return $this->type;
    }
}