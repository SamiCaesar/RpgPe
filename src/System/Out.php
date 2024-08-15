<?php

namespace Rpg\Ptpdeux\System;

class Out
{
                    /**
                     * Gibt Text MIT Zeilenumbruch aus.
                     * @param string $text Text, der ausgegeben werden soll.
                     * @param TextColor $color Textfarbe (Standard ist weiß)
                     * @param BackgroundColor $background Hintergrundfarbe (Standard ist schwarz)
                     */
        public static function printLn(string $text, TextColor $color = TextColor::white, BackgroundColor $background = BackgroundColor::black): void
    {
        echo sprintf("%s%s%s%s\n",self::setColor($color),self::setColor($background),$text,self::setColor('0'));
    }

    public static function printListLn(string $titel, string $text, int $width = 32, TextColor $color = TextColor::white, BackgroundColor $background = BackgroundColor::black): void
    {
        $dotLength = $width - ( strlen($titel) + strlen($text) );
        $dots = '';
        for($i = 1; $i <= $dotLength; $i++) $dots .= '.';
        echo sprintf("%s%s%s%s%s%s\n",self::setColor($color), self::setColor($background),$titel, $dots, $text, self::setColor('0'));
    }

                    /**
                     * Gibt Text OHNE Zeilenumbruch aus.
                     * @param string $text Text, der ausgegeben werden soll.
                     * @param TextColor $color Textfarbe (Standard ist weiß)
                     * @param BackgroundColor $background Hintergrundfarbe (Standard ist schwarz)
                     */
    public static function print(string $text, TextColor $color = TextColor::white, BackgroundColor $background = BackgroundColor::black): void
    {
        echo sprintf("%s%s%s%s",self::setColor($color),self::setColor($background),$text,self::setColor('0'));
    }

                    /**
                     * Gibt Alarm-Block MIT Zeilenumbruch aus.
                     * @param string $text Text, der ausgegeben werden soll.
                     * @param TextColor $color Textfarbe (Standard ist weiß)
                     * @param BackgroundColor $background Hintergrundfarbe (Standard ist rot)
                     * @param int $whitespace Leerzeichen zwischen Rand und Text
                     */
    public static function printAlert(string $text, TextColor $color = TextColor::white, BackgroundColor $background = BackgroundColor::red, int $whitespace = 6): void
    {
        self::generateFrame($text, ' ',  $whitespace, $color,$background);
    }

                    /**
                     * Gibt Text als Überschrift MIT Zeilenumbruch und Leerzeile aus.
                     * @param string $text Text, der ausgegeben werden soll.
                     * @param TextColor $color Textfarbe (Standard ist weiß)
                     * @param BackgroundColor $background Hintergrundfarbe (Standard ist schwarz)
                     * @param int $whitespace Leerzeichen zwischen Rand und Text
                     */
    public static function printHeading(string $text, TextColor $color = TextColor::white, BackgroundColor $background = BackgroundColor::black, int $whitespace = 6): void
    {
        self::generateFrame($text, whitespace: $whitespace, color: $color, background: $background);
    }

                    /**
                     * @param string $text Text, der ausgegeben werden soll.
                     * @param string $frameChar Zeichen, das für den Rahmen verwendet werden soll.
                     * @param int $whitespace Leerzeichen zwischen Rand und Text
                     * @param TextColor $color Textfarbe (Standard ist weiß)
                     * @param BackgroundColor $background Hintergrundfarbe (Standard ist schwarz)
                     */
    private static function generateFrame(string $text, string $frameChar = "#", int $whitespace = 1, TextColor $color = TextColor::white, BackgroundColor $background = BackgroundColor::black): void
    {
        $horizontalLine = '';
        $whiteSpaceLine = '';
        for($i = 1; $i <= (strlen($text) + (2*$whitespace)+2); $i++) $horizontalLine .= $frameChar;
        for($i = 1; $i <= $whitespace; $i++) $whiteSpaceLine .= ' ';
        self::printLn($horizontalLine, $color, $background);
        self::printLn($frameChar.$whiteSpaceLine.$text.$whiteSpaceLine.$frameChar, $color, $background);
        self::printLn($horizontalLine, $color, $background);
        self::printLn("");
    }

                    /**
                     * Hilfsmethode, um Farben zu codieren.
                     * @param string|TextColor|BackgroundColor $color Farbcode
                     * @return string codierter Farbcode
                     */
    private static function setColor(string|TextColor|BackgroundColor $color): string
    {
        if($color instanceof TextColor || $color instanceof BackgroundColor) {
            return "\033[{$color->value}m";
        } else {
            return "\033[{$color}m";
        }
    }

}