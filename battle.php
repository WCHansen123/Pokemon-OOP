<?php

require 'Pokemon/Pokemons.php';

$pikachu = new Pikachu('Pikachu', 'Lightning', '60', '60', array(new skills('Pika Punch', '20', 'Normal'), new skills('Electric Ring', '50', 'Lightning')), '70', new weakness('Fire', '1,5'), new resistance('Water', '0,5'), 'Pokemon');
$charmeleon = new Charmeleon('Charmeleon ', 'Fire', '60', '60', array(new skills('Head Butt', '10', 'Normal'), new skills('Flare', '30', 'Fire')), '40', new weakness('Water', '1,5'), new resistance('Grass','0,5'), 'Pokemon');

$pokemons = [$pikachu, $charmeleon];

foreach ($pokemons as $pokemon)
{
    echo $pokemon->getPopulation() . "<br>";
}
echo "<br>";

function getBr(){
    return "<br>";
}

echo "Naam: ". $pikachu->getName() . '<br>';
echo "Levens: " . $pikachu->getHealth() . "<br>";
echo "Aanvallen: <br>";
echo  getBr();
echo " |  ".$pikachu->getFirstAttack()->getName() . "<br>";
echo " |  ".$pikachu->getFirstAttack()->getDamage() . "<br>";
echo " |  ".$pikachu->getFirstAttack()->getType() . "<br>";
echo  getBr();
echo " |  ".$pikachu->getSecondAttack()->getName() . "<br>";
echo " |  ".$pikachu->getSecondAttack()->getDamage() . "<br>";
echo " |  ".$pikachu->getSecondAttack()->getType() . "<br>";
echo  getBr();
echo "Zwakte: " . $pikachu->getWeakness()->getName() . "<br>";
echo  "Zwakte Multiplier: " . $pikachu->getWeakness()->getMultiplier() . "<br>";
echo "Sterkte: " . $pikachu->getResistance()->getMultiplier() . "<br>";
echo  "Zwakte Multiplier: " . $pikachu->getResistance()->getMultiplier() . "<br>";

echo  getBr();
echo  getBr();

echo "Naam: ". $charmeleon->getName() . '<br>';
echo "Levens: " . $charmeleon->getHealth() . "<br>";
echo "Aanvallen: <br>";
echo  getBr();;
echo " |  ".$charmeleon->getFirstAttack()->getName() . "<br>";
echo " |  ".$charmeleon->getFirstAttack()->getDamage() . "<br>";
echo " |  ".$charmeleon->getFirstAttack()->getType() . "<br>";
echo  getBr();
echo " |  ".$charmeleon->getSecondAttack()->getName() . "<br>";
echo " |  ".$charmeleon->getSecondAttack()->getDamage() . "<br>";
echo " |  ".$charmeleon->getSecondAttack()->getType() . "<br>";
echo  getBr();
echo "Zwakte: " . $charmeleon->getWeakness()->getName() . "<br>";
echo  "Zwakte Multiplier: " . $charmeleon->getWeakness()->getMultiplier() . "<br>";
echo "Sterkte: " . $charmeleon->getResistance()->getName() . "<br>";
echo  "Zwakte Multiplier: " . $charmeleon->getResistance()->getMultiplier() . "<br>";

echo  getBr();
echo 'Gevecht scenario: <br>';
echo  getBr();

echo $pikachu->getName() . " gebruikt de aanval " . $pikachu->getFirstAttack()->getName() . ". <br>";

$charmeleon->setHealth($charmeleon->getHealth() - $pikachu->attackPokemon($charmeleon, $pikachu->getFirstAttack()));

echo $charmeleon->getName() . " heeft " . $pikachu->getFirstAttack()->getDamage() . " schade genomen. <br>";
echo $charmeleon->getName() .' levens is nu: ' . $charmeleon->getHealth();

echo  getBr();
echo  getBr();

echo $charmeleon->getName() . " gebruikt de aanval " . $charmeleon->getSecondAttack()->getName() . ". <br>";

$pikachu->setHealth($pikachu->getHealth() - $charmeleon->attackPokemon($pikachu, $charmeleon->getFirstAttack()));

echo $pikachu->getName() . " heeft " . $charmeleon->getFirstAttack()->getDamage() . " schade genomen. <br>";
echo $pikachu->getName() .' levens is nu: ' . $pikachu->getHealth();


echo  getBr();
echo  getBr();

echo $pikachu->getName() . " gebruikt de aanval " . $pikachu->getSecondAttack()->getName() . ". <br>";
echo $charmeleon->getName() . " heeft " . $pikachu->getSecondAttack()->getDamage() . " schade genomen. <br>";
$charmeleon->setHealth($charmeleon->getHealth() - $pikachu->getSecondAttack()->getDamage());
echo $charmeleon->getName() .' levens is nu: ' . $charmeleon->getHealth();

echo  getBr();
echo  getBr();


if ($pikachu->getHealth() <= 0){
    echo $pikachu->getName() . " is niet meer in staat om te vechten," . $charmeleon->getName() . " is de Winnaar!";
}
if ($charmeleon->getHealth() <= 0){
    echo $charmeleon->getName() . " is niet meer in staat om te vechten, " . $pikachu->getName() . " is de Winnaar!";
}
echo '<br>';

foreach ($pokemons as $pokemon)
{
    echo $pokemon->getPopulation() . "<br>";
}
echo "<br>";

