<?php

namespace Rpg\Ptpdeux\Character;

                // use Rpg\Ptpdeux\Character\Player\Gladiator;

class Character extends CharacterAtt
{
    public function __construct()
    {
        parent::__construct('',1,1,100,1,0.1,1,0.1,1,0.1,1,0.1,1,0.1);

                                    /**    public static function createCharacter($type) {
                                     *
                                     * switch ($type) {
                                     * case 'Gladiator':
                                     * echo ("{}")
                                     * return new Gladiator($getGla);
                                     * case 'Zauberer':
                                     * return new Character("Zauberer", 80, 30, 5);
                                     * case 'Bogenschütze':
                                     * return new Character("Bogenschütze", 90, 25, 8);
                                     * default:
                                     * throw new Exception("Unbekannter Charaktertyp: $type");
                                     * }
                                     * }    */
    }

    public function printMe(): void
    {
        echo $this->name . $this->hp . $this->getCp() ;
    }

}


class Gladiator extends Character
{
    function seeAtt()
    {
        parent::__construct("Gladiator", 1, 1, 130, 6, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);
    }
}

    //        parent::__construct("Mage",1,1,40,6,1.2,4,1.6,3,0.3,3,0.6,4,1.5);


$gladiator = new Gladiator(1, "Gladiator");
$mage = new Mage(2, "Mage");

$characters = array($gladiator, $mage);


// Charaktere erstellen
// $character1 = Character::createCharacter('Gladiator');
// $character2 = Character::createCharacter('Zauberer');
