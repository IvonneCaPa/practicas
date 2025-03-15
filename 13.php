<?php
    $dividendo = 20;
    $divisor = 4;

    if($divisor >= 2 && $divisor <= 7){
        if($dividendo%$divisor == 0){
            echo "El dividendo es multiplo del divisor";
        } else {
            echo "El dividendo no es multiplo del divisor";
        }
        
    } else {
        echo "El divisor no es un valor valido. Escoja un número entre 2 y 7";
    }

?>