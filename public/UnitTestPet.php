<?php

use PHPUnit\Framework\TestCase;

require_once('classes/Pet.php');

class PetTest extends TestCase
{
    private $pet;

    protected function setUp(): void
    {
        $this->pet = new Pet("Dog", "Buddy", "Labrador", 3, "Dublin", 150, "dogImage.jpg");
    }

    // Test initial values of the Pet object
    public function testInitialValues()
    {
        $this->assertEquals("Dog", $this->pet->getType());
        $this->assertEquals("Buddy", $this->pet->getName());
        $this->assertEquals("Labrador", $this->pet->getBreed());
        $this->assertEquals(3, $this->pet->getAge());
        $this->assertEquals("Dublin", $this->pet->getLocation());
        $this->assertEquals(150, $this->pet->getPrice()); 
        $this->assertEquals("dogImage.jpg", $this->pet->getImage());
    }

    // Test setters and ensure values are updated correctly, including price
    public function testSetters()
    {
        $this->pet->setType("Cat");
        $this->pet->setName("Luna");
        $this->pet->setBreed("Persian");
        $this->pet->setAge(2);
        $this->pet->setLocation("Cork");
        $this->pet->setPrice(120); 
        $this->pet->setImage("catImage.jpg");

        $this->assertEquals("Cat", $this->pet->getType());
        $this->assertEquals("Luna", $this->pet->getName());
        $this->assertEquals("Persian", $this->pet->getBreed());
        $this->assertEquals(2, $this->pet->getAge());
        $this->assertEquals("Cork", $this->pet->getLocation());
        $this->assertEquals(120, $this->pet->getPrice()); 
        $this->assertEquals("catImage.jpg", $this->pet->getImage());
    }

    // Test if the displayPet method returns HTML content, ensuring price is displayed
    public function testDisplayPetReturnsHtml()
    {
        $html = $this->pet->displayPet();

        $this->assertStringContainsString("<div class='list-of-pets'>", $html);
        $this->assertStringContainsString($this->pet->getName(), $html);
        $this->assertStringContainsString($this->pet->getBreed(), $html);
        $this->assertStringContainsString($this->pet->getLocation(), $html);
        $this->assertStringContainsString($this->pet->getPrice(), $html); 
        $this->assertStringContainsString($this->pet->getImage(), $html);
    }
}


