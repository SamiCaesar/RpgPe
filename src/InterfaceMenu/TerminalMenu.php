<?php

namespace Rpg\Ptpdeux\InterfaceMenu;

use JetBrains\PhpStorm\NoReturn;
use Rpg\Ptpdeux\System\Out;
use Rpg\Ptpdeux\System\TextColor;
use Rpg\Ptpdeux\InterfaceMenu\ShowChar;
                                                                    use Closure;



class TerminalMenu

{
    private string $title;

    private string $key;

    /**
     * @var array<Closure>
     */
    private array $actions = [];

    private ?TerminalMenu $parentMenu = null;

    /**
     * @var array<TerminalMenu>
     */
    private array $children = [];

    /**
     * @param string $title
     * @param string $key
     * @param TerminalMenu|null $parentMenu
     * @param TerminalMenu[] $children
     */
    public function __construct
    (
        string        $title,
        string        $key,
        ?TerminalMenu $parentMenu = null,
        TerminalMenu  ...$children,
    )
    {
        $this->title = $title;
        $this->key = $key;
        $this->parentMenu = $parentMenu;
        $this->children = $children;
    }

    public function addAction(Closure $action): void
    {
        $this->actions[] = $action;
    }

    private function clearView(): void
    {
        echo shell_exec('clear');
    }

    private function renderMenu(bool $clearBefore = false): void
    {
        if ($clearBefore) self::clearView();
        Out::printHeading($this->title, TextColor::blue);
        foreach ($this->children as $child) {
            if ($child instanceof TerminalMenu) {
                Out::printLn("{$child->getKey()}: {$child->getTitle()}", TextColor::blue);
            }
        }
        if ($this->hasParent()) {
            Out::printLn("{$this->parentMenu->getKey()}: {$this->parentMenu->getTitle()}");
        }
    }

    #[NoReturn]
    public function render(): void
    {
        self::renderMenu(true);



        while (true) {
            $inputFound = false;
            $input = strtolower(readline("Aktion: "));

            if ($this->parentMenu != null && $input == $this->parentMenu->getKey()) {
                $this->parentMenu->render();
            }

            if ($this->hasChildren()) {
                foreach ($this->children as $child) {
                    if ($child instanceof TerminalMenu) {
                        if ($input == $child->getKey()) {
                            $inputFound = true;
                            if ($child->hasChildren()) {
                                $child->render();
                            } else {
                                $child->runActions();
                                self::renderMenu(true);
                            }
                        }
                    }
                }

            }

            if($input == 'laden') {
                 ShowChar::library();
            }

            if (in_array($input, ['exit', 'bye', 'quit'])) {
                self::clearView();
                Out::printAlert("Spiel wird beendet...", TextColor::blue, BackgroundColor::black);
                sleep(2);
                self::clearView();
                exit(0);
            }

            if (!$inputFound) {
                Out::printLn("Befehl >>$input<< ist nicht verfügbar!", TextColor::lightRed);
                sleep(2);
                self::renderMenu(true);
            }
        }
    }
                            /**
                                private static function library(): void
                                {
                                    foreach ($this->input2 = $input2) {
                                        return $this->show();
                                    }
                                }
                            */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setParentMenu(?TerminalMenu $parentMenu): void
    {
        $this->parentMenu = $parentMenu;
    }

    public function getParentMenu(): ?TerminalMenu
    {
        return $this->parentMenu;
    }

    public function addChild(TerminalMenu $menu): void
    {
        $this->children[] = $menu;
        $menu->setParentMenu($this);
    }

    public function addChildren(TerminalMenu ...$items): void
    {
        $this->children = array_merge($this->children, $items);
        foreach ($items as $item) {
            $item->setParentMenu($this);
        }
    }

    private function runActions(): void
    {
        foreach ($this->actions as $action) {
            call_user_func($action);
        }
    }

    public function hasParent(): bool
    {
        return (bool)$this->parentMenu;
    }

    public function hasChildren(): bool
    {
        return !(count($this->children) == 0);
    }
}
