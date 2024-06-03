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

        .category {
            width: 40%; 
            height: 50px; 
            background-color: #ddd; 
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .category a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            transition: color 0.3s;
        }

        .category:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .category a:hover {
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
    <h1>Kategorie</h1>
    <div class="container">
        <?php foreach ($categories as $category): ?>
            <div class="category">
                <a href="/sklep/<?php echo $category['slug'];?>"><?php echo $category['name']; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
    <button onclick="window.location.href='http://localhost:8000/main'">Wróć do Strony głównej</button>
</body>
</html>
