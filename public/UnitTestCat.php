<?php

use PHPUnit\Framework\TestCase;

require_once('classes/Cat.php');

class CatTest extends TestCase
{
    private $cat;

    // Set up the initial test data
    protected function setUp(): void
    {
        $this->cat = new Cat("Likhitha", "Siamese", 5, "Cork", "Playful, Affectionate", "Napping", 100, "catImage.jpg");
    }

    // Test the initial values after the object is created
    public function testInitialValues()
    {
        $this->assertEquals("Likhitha", $this->cat->getName());
        $this->assertEquals("Siamese", $this->cat->getBreed());
        $this->assertEquals(5, $this->cat->getAge());
        $this->assertEquals("Cork", $this->cat->getLocation());
        $this->assertEquals("Playful, Affectionate", $this->cat->getTraits());
        $this->assertEquals("Napping", $this->cat->getInterests());
        $this->assertEquals(100, $this->cat->getPrice()); 
        $this->assertEquals("catImage.jpg", $this->cat->getImage());
    }

    // Test the setters and verify the values are updated correctly
    public function testSetters()
    {
        $this->cat->setName("Luna");
        $this->cat->setBreed("Persian");
        $this->cat->setAge(3);
        $this->cat->setLocation("Galway");
        $this->cat->setTraits("Calm, Independent");
        $this->cat->setInterests("Watching birds, Hiding in boxes");

        $this->assertEquals("Luna", $this->cat->getName());
        $this->assertEquals("Persian", $this->cat->getBreed());
        $this->assertEquals(3, $this->cat->getAge());
        $this->assertEquals("Galway", $this->cat->getLocation());
        $this->assertEquals("Calm, Independent", $this->cat->getTraits());
        $this->assertEquals("Watching birds, Hiding in boxes", $this->cat->getInterests());
        $this->assertEquals("100", $this->cat->getPrice());
        $this->assertEquals("catImage.jpg", $this->cat->getImage());
    }

    // Test that the printCatDetails method returns HTML and includes price
    public function testPrintCatDetailsReturnsHtml()
    {
        $html = $this->cat->printCatDetails();

        // Check if the HTML output contains important details
        $this->assertStringContainsString("<div class='list-of-pets'>", $html);
        $this->assertStringContainsString($this->cat->getName(), $html);
        $this->assertStringContainsString($this->cat->getBreed(), $html);
        $this->assertStringContainsString($this->cat->getLocation(), $html);
        $this->assertStringContainsString($this->cat->getTraits(), $html);
        $this->assertStringContainsString($this->cat->getInterests(), $html);
        $this->assertStringContainsString($this->cat->getPrice(), $html);  
    }
}


