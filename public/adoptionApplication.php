<?php session_start(); ?>

<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adoption Application Form</title>
        <link rel="stylesheet" href="css/application.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    </head>


    <body>
    <?php include('Templates/header.php'); ?>

        <div= class="form-container">
            <form action="adoptionApplication.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="age" >Age:</label>
                <input type="number" id="age" name="age" required class="ageBox">

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <label for="address"></label>
                <input type="text" id="address" name="address" required>

                <label for="Pet Type">Pet Type: <input type="radio" id="dog" name="petType" value="Dog"> Dog <input type="radio" id="cat" name="petType" value="Cat"> Cat </label>
                <input type="submit" value="Submit">
            </form>
        </div>

        <!-- Displays the inputted data in the form at the bottom of the page, confirming submission -->
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $age = htmlspecialchars($_POST["age"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $petType = htmlspecialchars($_POST["petType"]);
        $breed = htmlspecialchars($_POST["breed"]);

        echo "<h2>Pet Application Submitted Successfully!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Pet Type:</strong> $petType</p>";
        echo "<p><strong>Breed:</strong> $breed</p>";
    } else {
        echo "<p>Error: Form not submitted.</p>";
    }
    ?>
    </body>
    
    <?php include('Templates/footer.php'); ?>
</html>