<?php

    class average {
        private int|float $num1;
        private int|float $num2;
        private int|float $num3;

        public function __construct(int|float $num1, int|float $num2, int|float $num3)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->num3 = $num3;
        }

        public function __toString() : String
        {
            $media = ($this->num1+$this->num2+$this->num3)/3;
            return "La media de los tres números es: $media";
        }
    }

    $media = new average(7,8,13);

    echo $media;
?>