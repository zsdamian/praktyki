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
    <script>
        function fetchOpinions(productId){
            console.log('trigger działa a id to: ' + productId);
        }
    </script>
</head>
<body>
<?php $product = ['name' => 'Faja', 'producer' => 'Smok', 'price' => 162, 'id' => 1]; ?>
        <div class="product">

            <h3><?php echo $product['name']; ?></h3>
            
            <?php echo $product['producer']; ?><br>
            
            <?php echo "Cena: " . $product['price'] . "zł"; ?><br>
            
            <?php echo $product['description']; ?>

            <button onclick="fetchOpinions(<?php echo $product['id']; ?>)">Pokaż opinie</button>
        </div>
</body>
</html>
