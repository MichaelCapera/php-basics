<?php

define('COLOR_RESET', "\033[0m");
define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_YELLOW', "\033[33m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_MAGENTA', "\033[35m");
define('COLOR_CYAN', "\033[36m");
define('COLOR_WHITE', "\033[37m");

# chr()
# Returns a character of a specified ASCII value
$number = 8888;
$text = chr($number);
echo COLOR_YELLOW . "====== chr() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Returns a character of a specified ASCII value:" . COLOR_RESET . "\n";
echo  COLOR_BLUE . $text . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# bin2hex()
# Converts an ASCII character string to hexadecimal values
$number = 8888;
$text = chr($number);
$text1 = bin2hex($text);
echo COLOR_YELLOW . "======  bin2hex() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Converts an ASCII character string to hexadecimal values:" . COLOR_RESET . "\n";
echo  COLOR_BLUE . $text1 . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# addcslashes()
# Returns a string with backslashes in front of the characters
$string = "Hello, world! \nThis is a \"test\" string with special characters: \t\\\n";
$charlist = "\n\t\"\\";
$escapedString = addcslashes($string, $charlist );
echo COLOR_YELLOW . "====== addcslashes() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Returns a string with backslashes in front of the characters:" . COLOR_RESET . "\n";

echo COLOR_GREEN . "Normal string:" . COLOR_RESET . "\n";
echo COLOR_CYAN . "Original String:" ."\n";
echo COLOR_MAGENTA . $string ."\n". COLOR_RESET . "\n";

echo COLOR_GREEN . "String format:" . COLOR_RESET . "\n";
echo COLOR_CYAN . "Escaped String:" ."\n";
echo COLOR_MAGENTA . $escapedString. "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# echo()
# Output one or more strings
$string = "Hello, world! \nThis is a \"test\" string with special characters: \t\\\n";
$charlist = "\n\t\"\\";
$escapedString = addcslashes($string, $charlist );
echo COLOR_YELLOW . "====== echo() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Output one or more strings:" . COLOR_RESET . "\n";
echo  COLOR_BLUE . "Hello world from echo ...". COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# explode()
# Break a string into an array
# array explode(string $delimiter, string $string, int $limit = PHP_INT_MAX)
$commaSeparatedValues = "apple,banana,cherry,dates";
$fruits = explode(',', $commaSeparatedValues, 3);
$fruits2 = explode(',', $commaSeparatedValues);
echo COLOR_YELLOW . "====== explode() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Fruits:". "\n"; 
var_dump($fruits) . COLOR_RESET . "\n";
echo COLOR_CYAN . "Fruits without explode limit param:". "\n"; 
var_dump($fruits2) . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# ltrim()
# Removes whitespace or other characters from the left side of a chain
# string ltrim(string $string, string $character_mask = " \t\n\r\0\x0B")
$string = "    Hello, World!";
$trimmedString = ltrim($string);
echo COLOR_YELLOW . "====== ltrim() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:". "\n"; 
echo COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "Trimmed String:". "\n"; 
echo COLOR_CYAN. $trimmedString . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# md5()
# Calculate the MD5 hash of a string
# string md5(string $string, bool $raw_output = false)
$string = "Hello, World!";
$hash = md5($string);
echo COLOR_YELLOW . "====== md5() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:". "\n"; 
echo COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "Hash:". "\n"; 
echo COLOR_CYAN. $hash  . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# md5() binary example
# Calculate the MD5 hash of a string
# string md5(string $string, bool $raw_output = false)
$string = "Hello, World!";
$hashBinary = md5($string, true);
$hashBinaryHex = bin2hex($hashBinary);
 
$hash = md5($string, true);
echo COLOR_YELLOW . "====== md5() binary example =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:". "\n"; 
echo COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "MD5 Hash (Binary):". "\n"; 
echo COLOR_CYAN. $hashBinary . COLOR_RESET . "\n";
echo COLOR_GREEN . "MD5 Hash (BinaryHex):". "\n"; 
echo COLOR_CYAN. $hashBinaryHex . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# print() binary example
# Output one or more strings
$string = "Hello, World!";
echo COLOR_YELLOW . "====== print() binary example =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Hello world from print:". "\n"; 
print COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# rtrim() 
# Removes whitespace or other characters from the right side of a chain
# string rtrim(string $string, string $character_mask = " \t\n\r\0\x0B")
$string = "Hello, World!    ";
$trimmedString = rtrim($string);
echo COLOR_YELLOW . "====== # rtrim() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:". "\n"; 
echo COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "Trimmed String:". "\n"; 
echo COLOR_CYAN. $trimmedString . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# rtrim() Example with character_mask
# Removes whitespace or other characters from the right side of a chain
# string rtrim(string $string, string $character_mask = " \t\n\r\0\x0B")
$string = "Hello, World!!! \n";
$trimmedString = rtrim($string, " !\n");
echo COLOR_YELLOW . "====== # rtrim() Example with character_mask =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:". "\n"; 
echo COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "Trimmed String:". "\n"; 
echo COLOR_CYAN. $trimmedString . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# sha2()  sha256
# Calculate the SHA-2 hash of a string
$string = "Hello, World!!! \n";
$hashSha256 = hash("sha256", $string);
echo COLOR_YELLOW . "====== # sha2()  sha256 =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:". "\n"; 
echo COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "Sha256 String:". "\n"; 
echo COLOR_CYAN. $hashSha256 . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# sha2()  sha512
# Calculate the SHA-2 hash of a string
$string = "Hello, World!!! \n";
$hashSha512 = hash("sha512", $string);
echo COLOR_YELLOW . "====== # sha2()  sha512 =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:". "\n"; 
echo COLOR_CYAN. $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "Sha512 String:". "\n"; 
echo COLOR_CYAN. $hashSha512 . COLOR_RESET . "\n";
echo COLOR_RED. "******************************" . COLOR_RESET . "\n";

# sha2()  SHA-256 Hash (Binary to Hexadecimal
# Calculate the SHA-2 hash of a string
$string = "Hello, World!";
$hashSha256Raw = hash("sha256", $string, true);
$bin2hexHash = bin2hex($hashSha256Raw);
echo COLOR_YELLOW . "====== SHA-256 Hash (Binary to Hexadecimal) =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Original string:" . "\n"; 
echo COLOR_CYAN . $string . COLOR_RESET . "\n";
echo COLOR_GREEN . "SHA-256 Hash (Binary to Hexadecimal):" . "\n"; 
echo COLOR_CYAN . $bin2hexHash . COLOR_RESET . "\n";
echo COLOR_RED . "******************************" . COLOR_RESET . "\n";

# str_replace()
# Replaces some characters in a string (distinguishes between upper case and lower case)
$text = "Hello, World! Welcome to the World of PHP.";
$search = "World";
$replace = "Universe";
$newText = str_replace($search, $replace, $text);
echo COLOR_YELLOW . "======  str_replace() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Replaces some characters in a string (distinguishes between upper case and lower case)" . "\n"; 
echo COLOR_GREEN . "Original Text:" . "\n"; 
echo COLOR_CYAN .$text . COLOR_RESET . "\n";
echo COLOR_GREEN . "Modified Text:" . "\n"; 
echo COLOR_CYAN . $newText . COLOR_RESET . "\n";
echo COLOR_RED . "******************************" . COLOR_RESET . "\n";

# strlen()
# Returns the length of a string
$text = "Hello, World! Welcome to the World of PHP.";
$length = strlen($text);
echo COLOR_YELLOW . "======  strlen() =========" . COLOR_RESET . "\n";
echo COLOR_GREEN . "Returns the length of a string" . "\n"; 
echo COLOR_GREEN . "Original Text:" . "\n"; 
echo COLOR_CYAN .$text . COLOR_RESET . "\n";
echo COLOR_GREEN . "Length:" . "\n"; 
echo COLOR_CYAN . $length . COLOR_RESET . "\n";
echo COLOR_RED . "******************************" . COLOR_RESET . "\n";





?>