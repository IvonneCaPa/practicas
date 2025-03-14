<?php

    class PrintData{
        // propiedades
        private string $name;
        private string $lastName;
        private int $age;


        /*************************** METODOS *********************************/
        // Constructor
        public function __construct(string $name, string $lastName, int $age)
        {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        // set y get
        public function setName(string $name) : void { 
            $this->name = $name;
        }
        public function getName() : string {
            return ucwords(strtolower($this->name));
        }

        public function setLastName(string $lastName) : void {
            $this->lastName = $lastName;
        }
        public function getLastName() : string {
            return ucwords(strtolower($this->lastName));
        }

        public function setAge(int $age) : void{
            $this->age = $age;
        }
        public function getAge() : int {
            return $this->age;
        }

        //toString
        public function __toString() : string
        {
            return $this->getName() . " " . $this->getLastName() . " tiene " . $this->getAge() . " años" . PHP_EOL;
        }
    }

    $alumno = new PrintData("manOLito", "GAfotAs", 8);

    echo $alumno;
    
?>