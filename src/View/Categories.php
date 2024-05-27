<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorie</title>
    <style>
        .category {
            width: 100px; 
            height: 100px; 
            background-color: #ccc; 
            margin: 10px;
            float: left; 
        }
    </style>
</head>
<body>
    <h1>Produkty</h1>
    <?php foreach ($categories as $category): ?>
        <div class="category">
        <a href="/sklep/<?php echo $category['slug'];?>"><?php echo $category['name']; ?></a>
        </div>
    <?php endforeach; ?>
</body>
</html>
