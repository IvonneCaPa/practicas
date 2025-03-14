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
            $this->name = strtolower($name);
        }
        public function getName() : string {
            return ucwords($this->name);
        }

        public function setLastName(string $lastName) : void {
            $this->lastName = strtolower($lastName);
        }
        public function getLastName() : string {
            return ucwords($this->lastName);
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
            return "$this->name $this->lastName tiene $this->age\n";
        }
    }

    $alumno = new PrintData("Manolito", "Gafotas", 8);

    echo $alumno;






?>