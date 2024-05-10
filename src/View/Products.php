<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($Products as $product): ?>
            <li><?php echo $product['name']; ?> - <?php echo $product['price']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>