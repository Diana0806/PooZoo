<?php

    class employees {
        protected $name;
        protected $age;
        protected $gender;
        

        public function __construct($name, $age, $gender) {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function getCharacteristics() {
            echo "Name:{$this->name}, Age:{$this->age}, Gender:{$this->gender}";
        }

        public function examineEnclosure(enclosures $enclosure) {
            echo "{$this->name} is examining the {$enclosure->getName()} enclosure.<br>";

        }

        public function cleanEnclosure(enclosures $enclosure) {
            echo "{$this->name} is cleaning the {$enclosure->getName()} enclosure.<br>";

        }

        public function feedAnimals(enclosures $enclosure) {
            if (!$enclosure->isEmpty()) {
                echo "{$this->name} is feeding the animals in the {$enclosure->getName()} enclosure.<br>";
            } else {
                echo "{$enclosure->getName()} enclosure is empty.<br>";
            }
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of gender
         */ 
        public function getGender()
        {
                return $this->gender;
        }

        /**
         * Set the value of gender
         *
         * @return  self
         */ 
        public function setGender($gender)
        {
                $this->gender = $gender;

                return $this;
        }
    }