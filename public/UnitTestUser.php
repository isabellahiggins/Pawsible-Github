<?php

use PHPUnit\Framework\TestCase;

require_once('classes/User.php');

class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
    
        $this->user = new User("johndoe", "John", "Doe", "john.doe@example.com", "password123", "1234567890", "123 Main St");
    }

    // Test initial values
    public function testInitialValues()
    {
        $this->assertEquals("john_doe", $this->user->getUsername());
        $this->assertEquals("John", $this->user->getFirstName());
        $this->assertEquals("Doe", $this->user->getSurname());
        $this->assertEquals("john.doe@example.com", $this->user->getEmail());
        $this->assertEquals("password123", $this->user->getPassword());
        $this->assertEquals("1234567890", $this->user->getPhoneNumber());
        $this->assertEquals("123 Main St", $this->user->getAddress());
    }

    // Test setters and ensure values are updated correctly
    public function testSetters()
    {
        $this->user->setUsername("jane_doe");
        $this->user->setFirstName("Jane");
        $this->user->setSurname("Doe");
        $this->user->setEmail("jane.doe@example.com");
        $this->user->setPassword("newpassword123");
        $this->user->setPhoneNumber("0987654321");
        $this->user->setAddress("456 Elm St");

        $this->assertEquals("jane_doe", $this->user->getUsername());
        $this->assertEquals("Jane", $this->user->getFirstName());
        $this->assertEquals("Doe", $this->user->getSurname());
        $this->assertEquals("jane.doe@example.com", $this->user->getEmail());
        $this->assertEquals("newpassword123", $this->user->getPassword());
        $this->assertEquals("0987654321", $this->user->getPhoneNumber());
        $this->assertEquals("456 Elm St", $this->user->getAddress());
    }

    // Test getters for individual properties
    public function testGetters()
    {
        $this->assertEquals("john_doe", $this->user->getUsername());
        $this->assertEquals("John", $this->user->getFirstName());
        $this->assertEquals("Doe", $this->user->getSurname());
        $this->assertEquals("john.doe@example.com", $this->user->getEmail());
        $this->assertEquals("password123", $this->user->getPassword());
        $this->assertEquals("1234567890", $this->user->getPhoneNumber());
        $this->assertEquals("123 Main St", $this->user->getAddress());
    }
}
<?php

require_once('classes/User.php');

$user1 = new User("jdoe", "John", "Doe", "john@example.com", "secure123", "0891234567", "123 Main St");

// get methods
echo "Username: " . $user1->getUsername() . "\n";
echo "First Name: " . $user1->getFirstName() . "\n";
echo "Surname: " . $user1->getSurname() . "\n";
echo "Email: " . $user1->getEmail() . "\n";
echo "Password: " . $user1->getPassword() . "\n";
echo "Phone Number: " . $user1->getPhoneNumber() . "\n";
echo "Address: " . $user1->getAddress() . "\n";

// set methods
$user1->setUsername("janedoe");
$user1->setFirstName("Jane");
$user1->setSurname("Smith");
$user1->setEmail("jane@example.com");
$user1->setPassword("newpass456");
$user1->setPhoneNumber("0897654321");
$user1->setAddress("456 Elm St");

// updated values
echo "Updated Username: " . $user1->getUsername() . "\n";
echo "Updated First Name: " . $user1->getFirstName() . "\n";
echo "Updated Surname: " . $user1->getSurname() . "\n";
echo "Updated Email: " . $user1->getEmail() . "\n";
echo "Updated Password: " . $user1->getPassword() . "\n";
echo "Updated Phone Number: " . $user1->getPhoneNumber() . "\n";
echo "Updated Address: " . $user1->getAddress() . "\n";

?>
