<?php

$n = $_GET['n'];


/*
$impar = ($n % 2) == 1;
if($impar) print 'Impar'; 
else print 'Par';
*/

$dividendo = $n;
$divisor = 2;

if($dividendo < 0)
    $dividendo *= -1;

while($dividendo >= $divisor) {
    $dividendo -= $divisor;
}

$impar = $dividendo != 0;

if($impar) print 'Impar'; 
else print 'Par';


?>