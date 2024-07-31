<?php

$age = 41;


function test()
{
    global $age;
    $age = 22;
}

test();

echo $age;
