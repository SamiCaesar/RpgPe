<?php

namespace Rpg\Ptpdeux\Character\Player;

use Rpg\Ptpdeux\Character\CharacterAtt;

class MageInfo extends CharacterAtt
{
    public function __construct()
    {
        parent::__construct("Mage", 1, 1, 40, 6, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);
    }


    public function show(): array
    {
        return [
            "name" => $this->name,
            "exp" => $this->exp
        ];
    }
}