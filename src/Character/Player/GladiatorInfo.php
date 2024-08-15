<?php

namespace Rpg\Ptpdeux\Character\Player;

use Rpg\Ptpdeux\Character\CharacterAtt;

class GladiatorInfo extends CharacterAtt
{
    public function __construct()
    {
        parent::__construct("Gladiator",1,1,130,6,1.2,4,1.6,3,0.3,3,0.6,4,1.5);
    }

    public function show($name,$exp,$lvl,$hp): string
    {
        return ($name.$exp.$lvl.$hp);
    }








       // return parent::$Gladiator;
/**
        return [
            "name"  =>  $this->name,
            "exp"   =>  $this->exp,
            "lvl"   =>  $this->hp,
            "ap"    =>  $this->ap,
            "af"    =>  $this->af,
            "dp"    =>  $this->dp,
            "df"    =>  $this->df,
            "cp"    =>  $this->cp,
            "cf"    =>  $this->cf,
            "agp"   =>  $this->agp,
            "agf"   =>  $this->agf,
            "dop"   =>  $this->dop,
            "dof"   =>  $this->dof
        ]; */


                            /**
                                public static function createCharacter($type)
                                {
                                    switch($type)
                                    {
                                        case 'Gladiator':
                                            return new CharacterAtt("Gladiator",1,1,130,false,1.2,4,1.6,3,0.3,3,0.6,4,1.5);


                                    }

                                } */
                                /**
                                public function __construct()
                                {
                                    parent::__construct("Gladiator",1,1,130,6,1.2,4,1.6,3,0.3,3,0.6,4,1.5);

                                    parent::__construct("Mage",1,1,40,6,1.2,4,1.6,3,0.3,3,0.6,4,1.5);


                                } */

}
