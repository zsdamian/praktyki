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
    <h1>Produkty tej kategorii</h1>
    <?php foreach ($products as $product): ?>
        <div class="categoryprod">
            <a href="/sklep/<?php echo $category['slug'];?>/<?php echo $product['slug'];?> "><?php echo $product['name']; ?></a>
        </div>
    <?php endforeach; ?>
    <button onclick="window.location.href='http://localhost:8000/sklep'">Wróć do Kategorii</button>
</body>
</html>
