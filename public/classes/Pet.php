<?php

class Pet {
    private $type;
    private $breed;
    private $age;
    private $name;
    private $location;
    private $imagePath;

    // constructor
    public function __construct($type, $name, $breed, $age, $location, $imagePath) {
        $this->type = $type;
        $this->name = $name;
        $this->breed = $breed;
        $this->age = $age;
        $this->location = $location;
        $this->imagePath = $imagePath;
    }

    // get and set methods
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getBreed() {
        return $this->breed;
    }

    public function setBreed($breed) {
        $this->breed = $breed;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getImage() {
        return $this->imagePath;
    }

    public function setImage($imagePath) {
        $this->imagePath = $imagePath;
    }

    public function displayPet() {
        return "
            <div class='list-of-pets'>
                <h2>{$this->name}</h2>
                <div class='pet-info'>
                    <img src='{$this->getImage()}' alt='{$this->name}' />
                    <p>{$this->breed} | Age: {$this->age}</p>
                    <p>Location: {$this->location}</p>
                </div>
            </div>
        ";
    }
}