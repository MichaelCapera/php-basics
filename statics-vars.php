<?php 

function test() {

    static $x = 0; # The value of the variable is preserved at run time
    echo $x;
    $x++;
}

test();
test();
test();

?>