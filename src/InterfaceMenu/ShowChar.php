<?php

namespace Rpg\Ptpdeux\InterfaceMenu;

use Rpg\Ptpdeux\Character\Player\GladiatorInfo;
use Rpg\Ptpdeux\Character\Player\MageInfo;

class ShowChar

{



    public function library($type)
    {
        switch ($type) {
            case 'Gladiator':
                return GladiatorInfo::class->show("Gladiator", 1, 1, 130, false, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);

            case 'Mage':
                return MageInfo::show("Gladiator", 1, 1, 130, false, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);

        }
    }
}


    /**
    public static function library(): array
    {

        $p1 = GladiatorInfo::class->show();
        $p2 = MageInfo::class->show();

        $input2 = strtolower(readline("Wähle einen Spieler: \n"));

        switch (strtolower($input2)) {
            case "Gladiator":

                echo "Gladiator.\n";
                echo $p1;
                break;

            case "Mage":

                echo "Mage.\n";
                echo $p2;
                break;
        }
        return [$p1.$p2];
    } */

            /**    public function showChar(GladiatorInfo->show() ): array
{
GladiatorInfo::show()   ; //([GladiatorInfo::class, 'show']);             //  ([GladiatorInfo::class, 'show']);
}
 * */
