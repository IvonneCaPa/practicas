<?php
/**El programa pide cuántas palabras quiere introducir el usuario/a. Éste, introduce el número y entonces aparece el siguiente mensaje: "Introduce la palabra". Este mensaje se muestra tantas veces como número de palabras ha dicho el usuario que quería introducir. Las palabras se guardan en un arrayList y una vez que han sido todas introducidas, se muestran por pantalla. */

    $num = 4;
    $words = [];

    for($i = 1; $i <= $num; $i++){
        array_push($words, $i);
    }
    $elementos = implode(", ", $words);

    echo "Los elementos del array son: ". $elementos;


?>