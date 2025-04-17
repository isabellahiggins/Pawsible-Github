<?php

require_once('Pet.php');

class Dog extends Pet {
    private $size;
    private $energyLevel;

    // constructor
    public function __construct($name, $breed, $age, $location, $size, $energyLevel, $imagePath) {
        parent::__construct('Dog', $name, $breed, $age, $location, $imagePath);
        $this->size = $size;
        $this->energyLevel = $energyLevel;
    }

    // get and set methods
    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getEnergyLevel() {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel) {
        $this->energyLevel = $energyLevel;
    }

    public function printDogDetails() {
        return $this->displayPet() . "
            <div class='dog-details'>
                <p>Size: {$this->size}</p>
                <p>Energy Level: {$this->energyLevel}</p>
            </div>
        ";
    }
}