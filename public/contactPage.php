<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contactStyle.css">
</head>
<body>
    
<?php include('Templates/header.php'); ?>



    <div id="description">
        <p>Have any questions? Fill out the form below, and we will get back you soon!</p>
    </div>

    <div class="contact-container">
        <form action="email.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="f" name="fullname" placeholder="fullname" required>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="email" required>
            <label for="question">Question :</label>
            <textarea id="question" name="question" rows="5" placeholder="Type your question here" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <?php include('Templates/footer.php'); ?>

</body>
</html>
