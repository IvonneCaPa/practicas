<?php

    enum operacion : string {
        case SUMA = "+";
        case RESTA = "-";
        case MULTIPLICACION = "*";
        case DIVISION = "/";
    }

    function calculator(int|float $num1, int|float $num2, operacion $operacion) : int|float {
        return match ($operacion) {
            operacion::SUMA => $num1 + $num2,
            operacion::RESTA => $num1 - $num2,
            operacion::MULTIPLICACION => $num1 * $num2,
            operacion::DIVISION => $num1 / $num2,
        };
    };

    $num1 = 120;
    $num2 = 5;
    $op = operacion::SUMA;

    echo "$num1 + $num2 = " . calculator($num1, $num2, operacion::SUMA) . PHP_EOL;
    echo "$num1 - $num2 = " . calculator($num1, $num2, operacion::RESTA) . PHP_EOL;
    echo "$num1 * $num2 = " . calculator($num1, $num2, operacion::MULTIPLICACION) . PHP_EOL;
    echo "$num1 / $num2 = " . calculator($num1, $num2, operacion::DIVISION) . PHP_EOL;

 

   
    





?>