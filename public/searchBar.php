<?php
// search query for pet adoption
if (!empty($_GET['q'])) {
    $query = htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8'); 
    $search_result = "You searched for: " . $query;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <title>Pawsible</title>
    <link rel="stylesheet" href="css/searchBar.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div id="title">
            <img src="images/pawsibleLogo.png" alt="logo" height= 100px width = 120px>
            <h1>Pawsible</h1>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About</a></li>
                    <li><a href="productDescription.php">Browse</a></li>
                    <li><a href="petcareguide.php">Pet Care Guide</a></li>
                    <li><a href="sponsor.php">Sponsor</a></li>
                    <li><a href="contactPage.php">Contact</a></li>
                    <li><a href="userRegistration.php">Register</a></li>
                </ul>
            </nav> 
        </div>
    </header>
        <form method="GET" action="searchbar.php" class="search-container">
            <input type="text" name="q" class="search-bar" placeholder="Search for pets to adopt" required>
            <button type="submit" class="search-button">Search</button>
        </form>
    
    <div class="footer">
        <p>&copy; 2025 Pawsible. All Rights Reserved.</p>
    </div>
</body>
</html>
