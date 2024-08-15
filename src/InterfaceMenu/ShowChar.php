<?php

namespace Rpg\Ptpdeux\InterfaceMenu;

use Rpg\Ptpdeux\Character\Player\GladiatorInfo;
use Rpg\Ptpdeux\Character\Player\MageInfo;

class ShowChar

{
    public static function library(): string
    {
        $gladiator = new GladiatorInfo();
        $mage = new MageInfo();

        $type = readline("Charakter: ");

        return match ($type) {
            'Gladiator' => $gladiator->show("Gladiator", 1, 1, 130, false, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5),
                 'Mage' => $mage->show("Gladiator", 1, 1, 130, false, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5),
                default => "Charakter, jibb et nich\n",
        };

    }








    /**
    private function ShowChar(): void
    {
        foreach ($this->library() as $char) {
            call_user_func($char);
        }
    }
*/

    //public function getChar(): array
    //{
    //    $this->library[] = $char;
    //    $char->

        //return self::library();
    //}

}


    /**
    public static function library(): array
    {

        $p1 = GladiatorInfo::show();
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

                    /** public function library($type)
                     * {
                     *
                     * $gladiator = new GladiatorInfo();
                     * $mage = new MageInfo();
                     *
                     * switch ($type) {
                     * case 'Gladiator':
                     * //    return GladiatorInfo::show("Gladiator", 1, 1, 130, false, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);
                     *
                     * return $gladiator->show("Gladiator", 1, 1, 130, false, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);
                     *
                     * case 'Mage':
                     * return $mage->show("Mage", 1, 1, 130, false, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);
                     *
                     * }
                     * return $gladiator.$mage;
                     */