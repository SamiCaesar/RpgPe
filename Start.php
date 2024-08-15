<?php

use Rpg\Ptpdeux\InterfaceMenu\TerminalMenu;

require "vendor/autoload.php";

/**
const save_dir = __DIR__. DIRECTORY_SEPARATOR . "savegame" . DIRECTORY_SEPARATOR;
const log_dir = __DIR__. DIRECTORY_SEPARATOR . "log" . DIRECTORY_SEPARATOR;
const asset_dir = __DIR__. DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR;

$cloud = new Cloud();
$tifa = new Tifa();

*/



$mainMenu = new TerminalMenu("Hauptmenü","main");
$character = new TerminalMenu("Character Info","char");
$newChar = new TerminalMenu("neuen Charakter erstellen","new");
$loadChar = new TerminalMenu("Charakter laden","laden");
$library = new TerminalMenu("Übersicht bekannter Figuren","archiv");
$battleMenu = new TerminalMenu("Kampfmenü","kampf");
$attackMenuItem = new TerminalMenu("Angriff","hit");
$attackMenu = new TerminalMenu("Angriff","hi");
        // Methode implementieren und ausführen, wenn "hit" benutzt wird.
                /**
                $attackMenuItem->addAction(function() use($cloud,$tifa) {
                    $cloud->attack($tifa);
                });
                */
        // Untermenüs bzw. Aktionen zu Menüs hinzufügen.

$mainMenu->addChild($battleMenu);
$mainMenu->addchild($character);
$character->addChildren($newChar, $loadChar, $library);
$battleMenu->addChild($attackMenuItem);

        // Hauptmenü ausführen

$mainMenu->render();