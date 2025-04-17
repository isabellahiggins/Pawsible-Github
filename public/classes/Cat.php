<?php

require_once('Pet.php');

class Cat extends Pet {
    private $traits;
    private $interests;

    // constructor
    public function __construct($name, $breed, $age, $location, $traits, $interests, $imagePath) {
        parent::__construct('Cat', $name, $breed, $age, $location, $imagePath); // Pass 'Cat' as the type
        $this->traits = $traits;
        $this->interests = $interests;
    }

    // get and set methods
    public function getTraits() {
        return $this->traits;
    }

    public function setTraits($traits) {
        $this->traits = $traits;
    }

    public function getInterests() {
        return $this->interests;
    }

    public function setInterests($interests) {
        $this->interests = $interests;
    }

    public function printCatDetails() {
        return $this->displayPet() . "
            <div class='cat-details'>
                <p>Traits: {$this->traits}</p>
                <p>Interests: {$this->interests}</p>
            </div>
        ";
    }
}