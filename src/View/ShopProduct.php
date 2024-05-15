<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorie</title>
    <style>
        .product {
            width: 200px; 
            height: 200px; 
            background-color: aquamarine; 
            margin: 10px;
            float:  left;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Produkty</h1>
    <?php foreach ($product as $prod): ?>
        <div class="product">

            <h3><?php echo $prod['name']; ?></h3>
            
            <?php echo $prod['producer']; ?><br>
            
            <?php echo "Cena: " . $prod['price'] . "zł"; ?><br>
            
            <?php echo $prod['description']; ?>

        </div>
    <?php endforeach; ?>
</body>
</html>
