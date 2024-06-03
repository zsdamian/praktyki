<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
        }

        .categoryprod {
            width: 150px; 
            height: 150px; 
            background-color: #7FFF00; 
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .categoryprod a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            transition: color 0.3s;
        }

        .categoryprod a:hover {
            color: #4CAF50;
        }

        button {
            display: block;
            margin: 20px auto;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Produkty tej kategorii</h1>
    <div class="container">
        <?php foreach ($products as $product): ?>
            <div class="categoryprod">
                <a href="/sklep/<?php echo $category['slug'];?>/<?php echo $product['slug'];?>"><?php echo $product['name']; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
    <button onclick="window.location.href='http://localhost:8000/sklep'">Wróć do Kategorii</button>
</body>
</html>
