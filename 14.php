<?php

    function toLetters(int $num){
        if(filter_var($num, FILTER_VALIDATE_INT) && $num < 100 && $num >=0 ){
            
            $unidades = [0=>"cero", 1=>"uno", 2=>"dos", 3=>"tres", 4=>"cuatro", 5=>"cinco", 6=>"seis", 7=>"siete", 8=>"ocho", 9=>"nueve"];

            $decenas = [10=>"diez", 11=>"once", 12=>"doce", 13=>"trece", 14=>"catorce", 15=>"quince", 16=>"dieciséis", 17=>"diecisiete", 18=>"dieciocho", 19=>"diecinueve", 20=>"veinte", 30=>"treinta", 40=>"cuarenta", 50=>"cincuenta",
            60=>"sesenta", 70=>"setenta", 80=>"ochenta", 90=>"noventa"];

            if($num < 9){
                echo $unidades[$num];
            } elseif($num < 19){
                echo $decenas[$num];
            } else { 
                echo $decenas[(floor($num/10))*10] . " y " . $unidades[($num%10)];
            };

         } else {
            echo "valor no valido";
         }

        }
    
    echo toLetters(37);





?>