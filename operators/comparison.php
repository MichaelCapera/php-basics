<?php

# Comparison Operators

# Equality: == ,   Example: ($x == $y) 
# Identical: === , Example: ($x === $y)
# Different: != , Example: ($x != $y)
# Different: <> , Example: ($x <> $y)
# Not identical: !== , Example: ($x !== $y)
# Greater than: > , Example: ($x > $y)
# Smaller than: < , Example: ($x < $y)
# Greater than or equal: >= , Example: ($x >= $y)
# Less than or equal to: <=  , Example: ($x <= $y)

define('COLOR_RESET', "\033[0m");
define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_YELLOW', "\033[33m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_MAGENTA', "\033[35m");
define('COLOR_CYAN', "\033[36m");
define('COLOR_WHITE', "\033[37m");

# ==  Equality Operator, true,  case echo result 1 as true
echo COLOR_YELLOW . "====== (==) Equality Operator true =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 7777;
$equality= $number1 == $number2;
var_dump($equality) . "\n";
echo COLOR_GREEN . ($number1 == $number2) . COLOR_RESET . "\n";
echo COLOR_YELLOW . "====== Equality Operator true =========" . COLOR_RESET . "\n";

# ==  Equality Operator, false
echo COLOR_YELLOW . "====== (==) Equality Operator false =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 7778;
$equality= $number1 == $number2;
var_dump($equality) . "\n";
echo COLOR_GREEN . ($number1 == $number2) . COLOR_RESET . "\n";
echo COLOR_YELLOW . "====== Equality Operator false =========" . COLOR_RESET . "\n";

# Identity Operator true
echo COLOR_YELLOW . "====== (===) Identity Operator true =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 7777;
$identity = $number1 === $number2;
var_dump($identity) . "\n";
echo COLOR_YELLOW . "====== Identity Operator true =========" . COLOR_RESET . "\n";

# Identity Operator false, case echo result false
echo COLOR_YELLOW . "====== (===) Identity Operator false =========" . COLOR_RESET . "\n";
$number1 = '7777';
$number2 = 7777;
$identity = $number1 === $number2;
var_dump($identity) . "\n";
echo COLOR_YELLOW . "====== Identity Operator false =========" . COLOR_RESET . "\n";

# Difference operators

echo COLOR_YELLOW . "====== (<>) Difference operators true =========" . COLOR_RESET . "\n";
$number1 = 7778;
$number2 = 7777;
$identity = $number1 <> $number2;
var_dump($identity) . "\n";
echo COLOR_YELLOW . "====== Difference operators true =========" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== (<>) Difference operators false =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 7777;
$identity = $number1 <> $number2;
var_dump($identity) . "\n";
echo COLOR_YELLOW . "====== Difference operators false =========" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== (!=) Difference operators true =========" . COLOR_RESET . "\n";
$number1 = 7778;
$number2 = 7777;
$identity = $number1 <> $number2;
var_dump($identity) . "\n";
echo COLOR_YELLOW . "====== Difference operators true =========" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== (!=) Difference operators false =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 7777;
$identity = $number1 <> $number2;
var_dump($identity) . "\n";
echo COLOR_YELLOW . "====== Difference operators false =========" . COLOR_RESET . "\n";

# Greater than

echo COLOR_YELLOW . "====== (>) Greater than true =========" . COLOR_RESET . "\n";
$number1 = 8888;
$number2 = 7777;
$greaterThan = $number1 > $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "====== Greater than true =========" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== (>) Greater than false =========" . COLOR_RESET . "\n";
$number1 = 8888;
$number2 = 7777;
$greaterThan = $number1 > $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "====== Greater than false =========" . COLOR_RESET . "\n";

# Smaller than

echo COLOR_YELLOW . "====== (<) Smaller than true =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 8888;
$greaterThan = $number1 < $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "====== Smaller than true =========" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== (<) Smaller than false =========" . COLOR_RESET . "\n";
$number1 = 8888;
$number2 = 7777;
$greaterThan = $number1 < $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "====== Smaller than false =========" . COLOR_RESET . "\n";

# Greater than or equal to

echo COLOR_YELLOW . "====== (>=)  Greater than or equal to true =========" . COLOR_RESET . "\n";
$number1 = 8888;
$number2 = 7777;
$greaterThan = $number1 >= $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "======  Greater than or equal to true =========" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== (>=)  Greater than or equal to false =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 8888;
$greaterThan = $number1 >= $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "======  Greater than or equal to false =========" . COLOR_RESET . "\n";

# Less than or equal to

echo COLOR_YELLOW . "====== (<=)  Less than or equal to true =========" . COLOR_RESET . "\n";
$number1 = 7777;
$number2 = 8888;
$greaterThan = $number1 <= $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "======  Less than or equal to true =========" . COLOR_RESET . "\n";

echo COLOR_YELLOW . "====== (<=)  Less than or equal to false =========" . COLOR_RESET . "\n";
$number1 = 8888;
$number2 = 7777;
$greaterThan = $number1 <= $number2;
var_dump($greaterThan) . "\n";
echo COLOR_YELLOW . "======  Less than or equal to false =========" . COLOR_RESET . "\n";


?>