<?php
require 'skills.php';
require 'weakness.php';
require 'resistance.php';

class Pokemon
{
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attack = [];
    private $speed;
    private $weakness;
    private $resistance;
    static protected $alive = 'alive';


    function __construct($name, $energyType, $hitpoints, $health, $attack, $speed, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attack = $attack;
        $this->speed = $speed;
        $this->resistance = $resistance;
        $this->weakness = $weakness;
    }


    function getName() {
        return $this->name;
    }
    function getEnergyType() {
        return $this->energyType;
    }

    function getHitpoints() {
        return $this->hitpoints;
    }

    function getHealth() {
        return $this->health;
    }
    function setHealth($health) {
        $this->health = $health;
    }
    function getFirstAttack() {
        return $this->attack[0];
    }

    function getSecondAttack() {
        return $this->attack[1];
    }

    function getSpeed() {
        return $this->speed;
    }

    function getResistance() {
        return $this->resistance;
    }
    function getWeakness() {
        return $this->weakness;
    }
    function attackPokemon($opponent, $attack){

        if ($opponent->getWeakness() === $attack->getType())
        {
            return $attack->getDamage() * $attack->getMultiplier();
        }
        else {
            return $attack->getDamage();
        }
    }

    function getPopulation()
    {
        // echo static::$alive;

        if ($this->health <= 0) {
            self::$alive = 'dead';
            return $this->getName() . ': ' . self::$alive;
        }
        else{
            return $this->getName() . ': ' . self::$alive;
        }
    }
}






