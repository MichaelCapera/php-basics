<?php
define('COLOR_RESET', "\033[0m");
define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_YELLOW', "\033[33m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_MAGENTA', "\033[35m");
define('COLOR_CYAN', "\033[36m");
define('COLOR_WHITE', "\033[37m");

# Ternary Operator

echo COLOR_YELLOW . "====== Ternary Operator true =========" . COLOR_RESET . "\n";
$id = '12345678';

$message = $id == "12345678" ? "Id is Ok" : "Id error"; 

echo  COLOR_BLUE . $message. COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== Ternary Operator false =========" . COLOR_RESET . "\n";
$id = '11111111';

$message = $id == "12345678" ? "Id is Ok" : "Id error"; 

echo  COLOR_BLUE . $message. COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

?>