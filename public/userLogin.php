<?php
require_once('classes/User.php');
require_once('PawsibleDatabase.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Check if username and password are provided
    if (!empty($username) && !empty($password)) {
        // Establish database connection
        $db = new PawsibleDatabase();
        $db->createConnection("127.0.0.1", "root", "Bagels12", "pawsible");

        // Try to get user with given username
        $users = $db->read("user", ["username" => $username]);

        if (count($users) > 0) {
            $user = $users[0];

            // Verify password using password_verify
            if (password_verify($password, $user['password'])) {
                // Login successful, set session
                $_SESSION['Username'] = $user['username'];
                $_SESSION['Active'] = true;
                header("Location: index.php"); // Redirect to home or dashboard
                exit;
            } else {
                $message = "<p class='result' style='color: red;'>Incorrect Password</p>";
            }
        } else {
            $message = "<p class='result' style='color: red;'>Username not found</p>";
        }

        $db->closeConnection();
    } else {
        $message = "<p class='result' style='color: red;'>Please fill in all fields.</p>";
    }
}
?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/productDescStyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactStyle.css">
    <title>Pawsible Login</title>
</head>
<body>

<?php include('Templates/header.php'); ?>

<div class="login-container">
   <div class="index-headings"> <h2>Login Below!</h2> </div>
    
   <div id class="contact-container">
    <!-- Login form -->
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</div>

    <!-- Link to registration page -->
    <div>
        <div class="index-headings"><h2>If you don't have an account, you can <a href="userRegistration.php">register</a>!</h2></div>
    </div>

    <!-- Display message if any -->
    <?php
    if (isset($message)) {
        echo $message;
    }
    ?>
</div>

<!-- Adopted pet images -->
<div class="mostAdoptedPet-container">
    <div><img src="images/pictures/cat1.jpg" height="200" width="150" alt="cat1"></div>
    <div><img src="images/pictures/cat2.jpg" height="200" width="150" alt="cat2"></div>
    <div><img src="images/pictures/dog1.jpg" height="200" width="150" alt="dog1"></div>
    <div><img src="images/pictures/dog2.jpg" height="200" width="150" alt="dog2"></div>
</div>

<?php include('Templates/footer.php'); ?>

</body>
</html>
