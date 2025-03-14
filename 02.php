<?php

    class operate {
        private int|float $num1;
        private int|float $num2;

        public function __construct(int|float $num1, int|float $num2)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function __toString()
        {
            $sum = $this->num1 + $this->num2;
            $rest = $this->num1 - $this->num2;
            $mult = $this->num1 * $this->num2;
            $div = $this->num1 / $this->num2; 
            return "El resultado de la suma es $sum\nEl resultado de la resta es $rest\nEl resultado de la multiplicación es $mult\nEl resultado de la división es $div";   
        }

    }

    $result = new operate(8,13);
    echo $result;
?>