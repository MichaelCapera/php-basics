<?php 

define('COLOR_RESET', "\033[0m");
define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_YELLOW', "\033[33m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_MAGENTA', "\033[35m");
define('COLOR_CYAN', "\033[36m");
define('COLOR_WHITE', "\033[37m");

# String Operators
# Concatenation . ($texto1 . “texto” )
#Concatenation and Assignment .= ($texto1 .= $texto2)

echo COLOR_YELLOW . "====== String Operators =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "====== Concatenation Operator =========" . COLOR_RESET . "\n";
echo  COLOR_BLUE . 'Hello'.' '.'world'. COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== Concatenation and Assignment Operator =========" . COLOR_RESET . "\n";
$text1 = 'Hello' . ' ';
$text2 = 'world';
$text1 .= $text2;

echo  COLOR_BLUE . $text1. COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";
?>