<?php 

require_once('classes/Pet.php');
require_once('classes/Dog.php');

$dog1 = new Dog("Sean", "Maltese", 22, "Dublin", "Large", "Low", "imageHere");

// get methods
echo "Name: " . $dog1->getName() . "\n";
echo "Breed: " . $dog1->getBreed() . "\n";
echo "Age: " . $dog1->getAge() . "\n";
echo "Location: " . $dog1->getLocation() . "\n";
echo "Size: " . $dog1->getSize() . "\n";
echo "Energy Level: " . $dog1->getEnergyLevel() . "\n";

// set methods
$dog1->setName("Isabella");
$dog1->setBreed("Pug");
$dog1->setAge(19);
$dog1->setLocation("Ringsend");
$dog1->setSize("Small");
$dog1->setEnergyLevel("Moderate");

// print updated values after set methods
echo "Updated Name: " . $dog1->getName() . "\n";
echo "Updated Breed: " . $dog1->getBreed() . "\n";
echo "Updated Age: " . $dog1->getAge() . "\n";
echo "Updated Location: " . $dog1->getLocation() . "\n";
echo "Updated Size: " . $dog1->getSize() . "\n";
echo "Updated Energy Level: " . $dog1->getEnergyLevel() . "\n";
?>