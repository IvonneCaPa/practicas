<?php

    class operate {
        private int|float $num;

        public function __construct(int|float $num)
        {
            $this->num = $num;
        }

        public function __toString()
        {
            $doble = $this->num * $this->num;
            $triple = $this->num * $doble;
            return "El doble de $this->num es $doble\nEl triple de $this->num es $triple";   
        }

    }

    $result = new operate(3);
    echo $result;
?>