<?php

    $alt = 5;
    $base = ($alt/2) + 1;

    $a=1;
    do {
       echo "*" . PHP_EOL;
       $a++;
    } while ($a < $alt);
    
    for($i=0; $i<=$base; $i++){
        echo "*";
    }

?>
