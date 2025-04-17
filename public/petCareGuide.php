<?php session_start(); ?>

<?php
$articles = [
    [
        "title" => "How to Train Your Dog",
        "content" => "Content for training your dog."
    ],
    [
        "title" => "Best Diet for Dogs",
        "content" => "Content about the best diet for dogs."
    ],
    [
        "title" => "Dog Grooming",
        "content" => "Tips for grooming your dog ."
    ],
    [
        "title" => "Common Dog Health Issues",
        "content" => "Content about common health issues for dogs."
    ],
    [
        "title" => "Understanding Your Dog’s Behavior",
        "content" => "Content about understanding dog behavior ."
    ]
];
?>


<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/ProductDescStyle.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pawsible - Pet Care Guide</title>
</head>
<body>
    
<?php include('Templates/header.php'); ?>

    <div class="container">
     <div class="index-headings">   <h2>Welcome to the Pet Care Guide</h2> </div>
        <div class="articles-container">
            <?php foreach ($articles as $article): ?>
                <div class="article-box">
                <h3 class="article-title"><?= htmlspecialchars($article['title']); ?></h3>
                <p class="article-content"><?= htmlspecialchars($article['content']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include('Templates/footer.php'); ?>

</body>
</html>

