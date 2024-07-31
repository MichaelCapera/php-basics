<?php


define('COLOR_RESET', "\033[0m");
define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_YELLOW', "\033[33m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_MAGENTA', "\033[35m");
define('COLOR_CYAN', "\033[36m");
define('COLOR_WHITE', "\033[37m");

# Pre Increment
echo COLOR_BLUE . "====== Pre Increment =========" . COLOR_RESET . "\n";
$x = 18;
echo COLOR_YELLOW . ++$x . "\n";
echo COLOR_BLUE. "******************************" . COLOR_RESET . "\n";

# Post Increment
echo COLOR_BLUE . "====== Post Increment =========" . COLOR_RESET . "\n";
$x = 18;
echo COLOR_YELLOW . "The first value of x = " . $x++ . "\n";
echo COLOR_RED . "The second value of x = " . $x . "\n";
echo COLOR_BLUE. "******************************" . COLOR_RESET . "\n";

# Pre Decrement
echo COLOR_BLUE . "====== Pre Decrement =========" . COLOR_RESET . "\n";
$x = 18;
echo COLOR_YELLOW . --$x . "\n";
echo COLOR_BLUE. "******************************" . COLOR_RESET . "\n";

# Post Decrement
echo COLOR_BLUE . "====== Post Decrement =========" . COLOR_RESET . "\n";
$x = 18;
echo COLOR_YELLOW . "The first value of x = " . $x-- . "\n";
echo COLOR_RED . "The second value of x = " . $x . "\n";
echo COLOR_BLUE. "******************************" . COLOR_RESET . "\n";

?>