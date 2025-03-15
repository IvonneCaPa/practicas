<?php

    $num1 = 4;
    $num2 = 4;
    $suma = 0;

    if($num1 > $num2){
        for($i = $num2; $i <= $num1; $i++){
            $suma += $i;
        }
    } elseif ($num1 < $num2) {
        for($i=$num1; $i <= $num2; $i++){
            $suma += $i;
        }
    } elseif ($num1 == $num2) {
        $suma = $num1 + $num2;
    } 

    echo $suma;

?>