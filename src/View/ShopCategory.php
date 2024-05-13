<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>
        <?php foreach ($category as $products): ?>
            <?php echo $products['name']; ?>
        <?php endforeach; ?>
</body> 
</html>
<?php

//tutaj kafelki z produktami, na górze wyszukiwarka (po kliknięciu na produkt analogiczna sytuacja)

?>
