<?php 
require_once('PawsibleDatabase.php');
require_once('classes/Pet.php');
require_once('classes/Dog.php');
require_once('classes/Cat.php');

$database = new PawsibleDatabase();
$database->createConnection("127.0.0.1", "root", "Bagels12", "pawsible"); 

// fetch pets from pets db table
$petsData = $database->read('pets');

// array to store pets objects
$pets = [];

foreach ($petsData as $petData) {
    if ($petData['type'] == 'Dog') {
        // fetch size and energyLevel attributes from dogs table using petID
        $dogData = $database->read('dogs', ['pet_id' => $petData['id']])[0];
        $pets[] = new Dog(
            $petData['name'], 
            $petData['breed'], 
            $petData['age'], 
            $petData['location'], 
            $dogData['size'], 
            $dogData['energyLevel'], 
            $petData['imagePath']
        );
    } elseif ($petData['type'] == 'Cat') {
        // fetch traits and interests attributes from dogs table using petID
        $catData = $database->read('cats', ['pet_id' => $petData['id']])[0];
        $pets[] = new Cat(
            $petData['name'], 
            $petData['breed'], 
            $petData['age'], 
            $petData['location'], 
            $catData['traits'], 
            $catData['interests'], 
            $petData['imagePath']
        );
    }
}

// Close the database connection
$database->closeConnection();
?>

<div class="flex-container">
    <?php foreach ($pets as $pet): ?>
        <?php echo $pet->displayPet(); ?>
    <?php endforeach; ?>
</div>