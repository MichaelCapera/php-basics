<?php

# Arithmetic operators
# Assignment operators
# Comparison operators
# Increment/decrement operators
# Text string operators
# Ternary operator

define('COLOR_RESET', "\033[0m");
define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_YELLOW', "\033[33m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_MAGENTA', "\033[35m");
define('COLOR_CYAN', "\033[36m");
define('COLOR_WHITE', "\033[37m");




# Arithmetic operators

# Sign Change Operator
echo COLOR_RED . "====== Sign Change Operator =========" . COLOR_RESET . "\n";
echo COLOR_BLUE . -(-5) . COLOR_RESET . "\n";
$x = -5;
echo COLOR_BLUE . -$x . COLOR_RESET . "\n";
echo COLOR_RED . "===== Sign Change Operator ==========" . COLOR_RESET . "\n";

# Addition Operator
echo COLOR_RED . "====== Addition Operator =========" . COLOR_RESET . "\n";
echo COLOR_BLUE . 5 + 7 . COLOR_RESET . "\n";
$number1 = 7;
$number2 = 5;
echo COLOR_BLUE . $number1 + $number2 . COLOR_RESET . "\n";
echo COLOR_RED . "===== Addition Operator ==========" . COLOR_RESET . "\n";

# Subtraction Operator
echo COLOR_RED . "====== Subtraction Operator =========" . COLOR_RESET . "\n";
echo  COLOR_BLUE . 84 - 47 . COLOR_RESET . "\n";
$number1 = 84;
$number2 = 47;
echo  COLOR_BLUE . $number1 - $number2 . COLOR_RESET . "\n";
echo COLOR_RED . "===== Subtraction Operator ==========" . COLOR_RESET . "\n";

# Division Operator
echo COLOR_RED . "====== Division Operator =========" . COLOR_RESET . "\n";
echo  COLOR_BLUE . 9 % 4 . COLOR_RESET . "\n";
$number1 = 9;
$number2 = 4;
echo  COLOR_BLUE . $number1 % $number2 . COLOR_RESET . "\n";
echo COLOR_RED . "===== Division Operator ==========" . COLOR_RESET . "\n";

# Exponential Operator
echo COLOR_RED . "====== Exponential Operator =========" . COLOR_RESET . "\n";
echo  COLOR_BLUE . 3 ** 8 . COLOR_RESET . "\n";
$number1 = 3;
$number2 = 8;
echo  COLOR_BLUE . $number1 ** $number2 . COLOR_RESET . "\n";
echo COLOR_RED . "===== Exponential Operator ==========" . COLOR_RESET . "\n";

# Addition Allowance
echo COLOR_RED . "====== Addition Allowance =========" . COLOR_RESET . "\n";
$x = 78;
$x += 8;
echo  COLOR_BLUE . $x. COLOR_RESET . "\n";
echo COLOR_RED . "===== Addition Allowance ==========" . COLOR_RESET . "\n";

# Subtraction Allowance
echo COLOR_RED . "====== Subtraction Allowance =========" . COLOR_RESET . "\n";
$x = 13;
$x -= 8;
echo  COLOR_BLUE . $x. COLOR_RESET . "\n";
echo COLOR_RED . "===== Subtraction Allowance ==========" . COLOR_RESET . "\n";


# Multiplication Assignment
echo COLOR_RED . "====== Multiplication Assignment =========" . COLOR_RESET . "\n";
$a = 10;
$b = 5;
$a *= $b;
echo  COLOR_BLUE . $a. COLOR_RESET . "\n";
echo COLOR_RED . "===== Multiplication Assignment ==========" . COLOR_RESET . "\n";

# Allocation by Division
echo COLOR_RED . "====== Allocation by Division =========" . COLOR_RESET . "\n";
$a = 9;
$b = 3;
$a /= $b;
echo  COLOR_BLUE . $a. COLOR_RESET . "\n";
echo COLOR_RED . "===== Allocation by Division ==========" . COLOR_RESET . "\n";

# Module Assignment
echo COLOR_RED . "====== Module Assignment =========" . COLOR_RESET . "\n";
$a = 13;
$b = 3;
$a %= $b;
echo  COLOR_BLUE . $a. COLOR_RESET . "\n";
echo COLOR_RED . "===== Module Assignment ==========" . COLOR_RESET . "\n";

?>