<?php
 class enclosures {
    protected $name;
    protected $number_animal;
    protected $cleanliness;
    //protected $type;
    protected $animals = [];

    public function __construct($name, $number_animal, $cleanliness) {
        $this->name = $name;
        $this->number_animal = $number_animal;
        $this->cleanliness = $cleanliness;
    }

    
    public function getCharacteristics() {
        echo "Name: {$this->name}, Number_animal: {$this->number_animal}, Cleanliness: {$this->cleanliness}<br>";
    }

    public function addAnimal(animals $animal) {
        // Vérification de la capacité de l'enclos à accueillir de nouveaux animaux
        if ($this->number_animal < 6) {
            $this->animals[] = $animal; // Ajouter l'animal à la liste
            $this->number_animal++; // Incrémenter le nombre d'animaux
            echo $animal->getSpecies() . " put in " . $this->name . ".\n"; // Afficher un message
        } else {
            echo $this->name . " is already complete.\n"; // Afficher un message si l'enclos est plein
        }
    }

    public function displayAnimalsCharacteristics() {
        echo "Animals in " . $this->getName();
        foreach ($this->animals as $animal) {
            echo $animal->getCharacteristics();
        }
    }

    public function removeAnimal(animals $animal) {
        // Find the index of the animal in the array
        $index = array_search($animal, $this->animals);

        if ($index!==false) {//If the animal is found in the array
            array_splice($this->animals, $index, 1);// Remove the animal from the array
            $this->number_animal--; // Decrement the animal count
            echo $animal->getSpecies() . " removed from " . $this->name . ".\n"; // Afficher un message
        } else {
            echo $animal->getSpecies() . " not found in ". $this->name . ".\n"; // Display the message if the animal is not in the enclosure
        }
    }


    public function isEmpty() {
        return $this->number_animal == 0;
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
     * Get the value of number_animal
     */ 
    public function getNumber_animal()
    {
        return $this->number_animal;
    }

    /**
     * Set the value of number_animal
     *
     * @return  self
     */ 
    public function setNumber_animal($number_animal)
    {
        $this->number_animal = $number_animal;

        return $this;
    }

    /**
     * Get the value of cleanliness
     */ 
    public function getCleanliness()
    {
        return $this->cleanliness;
    }

    /**
     * Set the value of cleanliness
     *
     * @return  self
     */ 
    public function setCleanliness($cleanliness)
    {
        $this->cleanliness = $cleanliness;

        return $this;
    }

 }