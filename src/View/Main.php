<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEWEX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 24px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }

        .rand {
            text-align: center;
            width: 80%;
            background-color: #ffffff;
            margin: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .rand:hover {
            transform: translateY(-5px);
        }

        .rand h2 {
            font-size: 18px;
            margin: 16px;
        }

        .rand p {
            font-size: 16px;
            margin: 0 16px 16px;
            color: #888;
        }

        .rand a {
            display: block;
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            transition: background-color 0.3s;
        }

        .rand a:hover {
            background-color: #45a049;
        }

        .button-container {
            text-align: center;
            margin: 20px;
        }

        .button-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .button-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
    PEWEX TU ZNAJDZIESZ WSZYSTKO I NIC!
    </header>

    <div class="button-container">
        <button onclick="window.location.href='http://localhost:8000/sklep'">Sklep</button>
        <button onclick="window.location.href='http://localhost:8000/komentarze'">Komentarze</button>
    </div>

    <div class="container">
    <?php foreach ($randomProducts as $product): ?>
    <div class="rand">
        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
        <p>Cena: <?php echo htmlspecialchars($product['price']); ?> zł</p>
        <a href="/sklep/<?php echo htmlspecialchars($product['category_slug']); ?>/<?php echo htmlspecialchars($product['product_slug']); ?>">Zobacz</a>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>
