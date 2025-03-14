<?php

    define("COBERTURA", 12);

    class CalculateLiters {
        private int|float $heigh;
        private int|float $width;
        private int|float $hand;

        public function __construct(int|float $heigh, int|float $width, int|float $hand)
        {
            $this->heigh = $heigh;
            $this->width = $width;
            $this->hand = $hand;
        }

        public function TotalLiters() : int|float {
            $result =  ($this->heigh * $this->width * $this->hand)/COBERTURA;
            return $result;
        }
    }

    $calculate = new CalculateLiters(3,8,12);
    $totalLitros = $calculate->TotalLiters();

    echo "Necesita $totalLitros litros en total para pintar";



?>