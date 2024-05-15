<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorie</title>
    <style>
        .categoryprod {
            width: 100px; 
            height: 100px; 
            background-color: lightgreen; 
            margin: 10px;
            float: left; 
        }
    </style>
</head>
<body>
    <h1>Kategorie</h1>
    <?php foreach ($category as $prod): ?>
        <div class="categoryprod">
            <a href="/sklep/<?php echo $prod['slug'];?>/<?php echo $prod['slug'];?> "><?php echo $prod['name']; ?></a>
        </div>
    <?php endforeach; ?>
</body>
</html>
