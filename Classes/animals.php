<?php

    class animals {
        protected $species;
        protected $name;
        protected $weight;
        protected $size;
        protected $age;
        protected $isHungry = true;
        protected $isSleeping = false;
        protected $isSick = false;

        public function __construct($species, $name, $weight, $size, $age) {
            $this->species = $species;
            $this->name = $name;
            $this->weight = $weight;
            $this->size = $size;
            $this->age = $age;
        }

        
        public function eat() {
            if($this->isHungry){
                echo "{$this->name} is eating.<br>";
                $this->isHungry = false;
            } else {
                echo "{$this->name} is not hungry now.<br>";
            }
        }

        public function makeSound() {
            echo "{$this->name} is making a sound.<br>";
        }

        public function sleep() {
            if($this->isSleeping){
                echo "{$this->name} is going to sleep.<br>";
                $this->isSleeping = true;
            } else {
                echo "{$this->name} is already sleeping.<br>";
            }
        }

        public function wakeUp() {
            if($this->isSleeping){
                echo "{$this->name} is waking up.<br>";
                $this->isSleeping = false;
            } else {
                echo "{$this->name} is already awake.<br>";
            }
        }

        public function getCharacteristics() {
            return "{$this->species} {$this->name}<br> weight: {$this->weight} size: {$this->size} age: {$this->age}";
        }

        public function roar(){
            echo "{$this->name} is roaring around.<br>";
        }
        
        public function swim(){
            echo "{$this->name} is swiming.<br>";
        }

        
        public function fly(){
            echo "{$this->name} is flying.<br>";
        }

        public function getHealthStatus() {
            return $this->isSick ? "Sick":"Healthy";
        }


        /**
         * Get the value of species
         */ 
        public function getSpecies()
        {
                return $this->species;
        }

        /**
         * Set the value of species
         *
         * @return  self
         */ 
        public function setSpecies($species)
        {
                $this->species = $species;

                return $this;
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
         * Get the value of weight
         */ 
        public function getWeight()
        {
                return $this->weight;
        }

        /**
         * Set the value of weight
         *
         * @return  self
         */ 
        public function setWeight($weight)
        {
                $this->weight = $weight;

                return $this;
        }

        /**
         * Get the value of size
         */ 
        public function getSize()
        {
                return $this->size;
        }

        /**
         * Set the value of size
         *
         * @return  self
         */ 
        public function setSize($size)
        {
                $this->size = $size;

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
    }

?>