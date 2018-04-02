<?php

$n = $_GET['n'];

$r = fat($n);

if($r == -1) print "Entrada Inválida";
else print $r;


function fat($n) {

    if ($n < 0)
        return -1;
    else if ($n == 0)
        return 1;
    else {
        return $n * fat($n - 1);
    }
}

?>