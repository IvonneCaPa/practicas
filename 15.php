<?php

    function player(int $player) {
        $ord = rand(1, 3);
        if(filter_var($player, FILTER_VALIDATE_INT) && $player <=3 && $player >= 1){
            //echo "seguimos para bingo";
            if(($ord == 1 && $player == 1) || ($ord == 2 && $player == 2) || ($ord == 3 && $player == 3)){
                return "Han empatado";
            } elseif (($ord == 1 && $player == 2) || ($ord == 2 && $player == 3) || ($ord == 3 && $player == 1)) {
                return "Has Ganado";
            } elseif (($ord == 1 && $player == 3) || ($ord == 2 && $player == 1) || ($ord == 3 && $player == 2)) {
                return "Has perdido";
            }
    
        } else{
            return "entiendo que no quieres jugar, adios";
        }
    }

    echo player(3);
   
  
    

    


    
    


?>