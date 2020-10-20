<?php
require 'Pokemon.php';

class Charmeleon extends Pokemon
{
    private $charmeleon;
//    static protected $alive = 'char char';

    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $speed, $weakness, $resistance, $charmeleon)
    {
        parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $speed, $weakness, $resistance);
        $this->charmeleon = $charmeleon;

    }
    public function getPokemon()
    {
        return $this->charmeleon;
    }
}

class Pikachu extends Pokemon
{
    private $pikachu;
//    static protected $alive = 'pika pika';

    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $speed, $weakness, $resistance, $pikachu)
    {
        parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $speed, $weakness, $resistance);
        $this->pikachu = $pikachu;
    }
    public function getPokemon()
    {
        return $this->pikachu;
    }
}