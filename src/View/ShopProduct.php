<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>
        <?php foreach ($product as $it): ?>
            <?php echo $it['name']; ?>
        <?php endforeach; ?>
</body> 
</html>
<?php

//dobrax3, tutaj tworzy podgląd produktu z dokladniejszymi informacjami

?>