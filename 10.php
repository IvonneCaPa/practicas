<?php
/**El usuario introduce un mes por pantalla y el programa calcula los días del mes y muestra lo siguiente: Ejemplo: Si el número introducido es 1, entonces debe aparecer por pantalla: “El mes de enero tiene 31 días” */

$num = 13;

$msg = match ($num) {
    1 => "El mes de enero tiene 31 días",
    2 => "El mes de febrero tiene 28 días",
    3 => "El mes de marzo tiene 31 días",
    4 => "El mes de abril tiene 30 días",
    5 => "El mes de mayo tiene 31 días",
    6 => "El mes de junio tiene 30 días",
    7 => "El mes de julio tiene 31 días",
    8 => "El mes de agosto tiene 31 días",
    9 => "El mes de septiembre tiene 30 días",
    10 => "El mes de octubre tiene 31 días",
    11 => "El mes de noviembre tiene 30 días",
    12 => "El mes de diciembre tiene 31 días",
    default => "Ese número no es valido",
};

echo $msg;

?>