<?php

$height = 141;

function test() {

    $GLOBALS['HEIGHT'] = 172;
}

    test();

    echo $height;
    

?>