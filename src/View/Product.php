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
            padding: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            width: 100%;
            margin-bottom: 20px;
        }

        .product, .addComment {
            width: 48%;
            background-color: #fff;
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .comments {
            width: 90%;
            background-color: #fff;
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product h3, .addComment h3 {
            margin-top: 0;
            font-size: 20px;
            color: #333;
        }

        .product p, .addComment p {
            margin-bottom: 10px;
            color: #666;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 3px;
        }

        button:hover {
            background-color: #45a049;
        }

        .addComment textarea {
            width: calc(100% - 20px);
            height: 100px;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: none;
        }

        .addComment input[type="text"], .addComment select {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .stars {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            
        }

        .star {
            font-size: 30px;
            color: #ddd;
            cursor: pointer;
            transition: color 0.3s;
        }

        .star:hover, .star.active {
            color: #ffcc00;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-section">
            <div class="product">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['producer']; ?></p>
                <p><?php echo "Cena: " . $product['price'] . "zł"; ?></p>
                <p><?php echo $product['description']; ?></p>
                <button onclick="window.location.href='http://localhost:8000/sklep/'">Wróć Do Kategorii</button>

                <button onclick="window.history.back()">Wróć Do Produktów</button>

            </div>

            <div class="addComment">
                <h3>Dodaj Komentarz</h3>
                <form id="addComment">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <input type="text" maxlength="21" name="author" placeholder="Wpisz nazwę autora">
                    <textarea maxlength="255" name="content" placeholder="Wpisz Opinie"></textarea>
                    <div class="stars">
                        <span class="star" onclick="setRating(1)">★</span>
                        <span class="star" onclick="setRating(2)">★</span>
                        <span class="star" onclick="setRating(3)">★</span>
                        <span class="star" onclick="setRating(4)">★</span>
                        <span class="star" onclick="setRating(5)">★</span>
                    </div>
                    <button type="submit" id="submit">Dodaj Opinie</button><br>
                </form>
            </div>
        </div>

        <div class="comments">
        <?php foreach ($comments as $comment): ?>
        <div class="comments">
            <p><strong>Autor:</strong> <?php echo $comment['author']; ?></p>
            <p><strong>Treść:</strong> <?php echo $comment['content']; ?></p>
            <p><strong>Ocena:</strong> <?php echo str_repeat('★', $comment['stars']) . str_repeat('☆', 5 - $comment['stars']); ?></p>
            <hr>
        </div>
    <?php endforeach; ?>
            <button id="load-more-btn">Pokaż więcej</button>
        </div>
    </div>

    <script>
        function setRating(rating) {
            var stars = document.querySelectorAll('.star');
            stars.forEach(function(star, index) {
                if (index < rating) {
                    star.classList.add('active');
                } else {
                    star.classList.remove('active');
                }
            });
        }
    </script>
</body>
</html>
