<?php

    $age = 4;
    $msg = "";

    if ($age <= 5) {
        $msg = "Preescolar";
    } elseif ($age <= 11) {
        $msg = "Primaria";
    } elseif ($age <= 15) {
        $msg = "ESO";
    } elseif ($age <= 17) {
        $msg = "Bachillerato";
    } elseif ($age >= 18) {
        $msg = "FP o Universidad";
    }

    echo "Estás en " . $msg;

?>
