<?php

use PHPUnit\Framework\TestCase;

require_once('classes/Pet.php');
require_once('classes/Dog.php');

class DogTest extends TestCase
{
    private $dog;

    protected function setUp(): void
    {
        $this->dog = new Dog("Buddy", "Labrador", 3, "Dublin", "Large", "High", 150, "dogImage.jpg");
    }

    // Test initial values of the Dog object
    public function testInitialValues()
    {
        $this->assertEquals("Buddy", $this->dog->getName());
        $this->assertEquals("Labrador", $this->dog->getBreed());
        $this->assertEquals(3, $this->dog->getAge());
        $this->assertEquals("Dublin", $this->dog->getLocation());
        $this->assertEquals("Large", $this->dog->getSize());
        $this->assertEquals("High", $this->dog->getEnergyLevel());
        $this->assertEquals(150, $this->dog->getPrice());
        $this->assertEquals("dogImage.jpg", $this->dog->getImage());
    }

    // Test the setters
    public function testSetters()
    {
        $this->dog->setName("Max");
        $this->dog->setBreed("Bulldog");
        $this->dog->setAge(4);
        $this->dog->setLocation("Cork");
        $this->dog->setSize("Medium");
        $this->dog->setEnergyLevel("Low");
        $this->dog->setPrice(180); 

        $this->assertEquals("Max", $this->dog->getName());
        $this->assertEquals("Bulldog", $this->dog->getBreed());
        $this->assertEquals(4, $this->dog->getAge());
        $this->assertEquals("Cork", $this->dog->getLocation());
        $this->assertEquals("Medium", $this->dog->getSize());
        $this->assertEquals("Low", $this->dog->getEnergyLevel());
        $this->assertEquals(180, $this->dog->getPrice());
    }

    // Test if the printDogDetails method returns HTML content
    public function testPrintDogDetailsReturnsHtml()
    {
        $html = $this->dog->printDogDetails();

        $this->assertStringContainsString("<div class='list-of-pets'>", $html);
        $this->assertStringContainsString($this->dog->getName(), $html);
        $this->assertStringContainsString($this->dog->getBreed(), $html);
        $this->assertStringContainsString($this->dog->getLocation(), $html);
        $this->assertStringContainsString($this->dog->getSize(), $html);
        $this->assertStringContainsString($this->dog->getEnergyLevel(), $html);
        $this->assertStringContainsString($this->dog->getPrice(), $html); 
    }
}

?>

