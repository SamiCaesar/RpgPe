<?php

namespace Rpg\Ptpdeux\System;

enum TextColor: string
{
    case white          =   ('1;37');
    case lightGrey      =   ('0;37');
    case darkGrey       =   ('1;30');
    case black          =   ('0;30');
    case blue           =   ('0;34');
    case lightBlue      =   ('1;34');
    case green          =   ('0;32');
    case lightGreen     =   ('1;32');
    case cyan           =   ('0;36');
    case lightCyan      =   ('1;36');
    case red            =   ('0;31');
    case lightRed       =   ('1;31');
    case purple         =   ('0;35');
    case lightPurple    =   ('1;35');
    case yellow         =   ('1,33');
    case brown         =    ('0,33');
}