<?php

    function getZodiacSign(int $dia, int $mes) : string {
            if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
                return "Aries";
            } elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
                return "Tauro";
            } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
                return "Géminis";
            } elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
                return "Cáncer";
            } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
                return "Leo";
            } elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
                return "Virgo";
            } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
                return "Libra";
            } elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
                return "Escorpio";
            } elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
                return "Sagitario";
            } elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
                return "Capricornio";
            } elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
                return "Acuario";
            } elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
                return "Piscis";
            } else {
                return "Fecha no válida";
            }
    }

    $dia = 20;
    $mes = 12;

    if ($dia < 1 || $dia > 31 || $mes < 1 || $mes > 12) {
        echo "Fecha no válida. Asegúrate de ingresar un día entre 1 y 31 y un mes entre 1 y 12.\n";
    } else {
        // Obtener el signo zodiacal
        $signo = getZodiacSign($dia, $mes);
        
        // Mostrar el resultado
        echo "Tu signo zodiacal es: $signo\n";
    }








?>