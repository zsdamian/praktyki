<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorie</title>
    
    <style>
        .product, .addComment, .comments{
            width: 200px; 
            height: 200px; 
            background-color: aquamarine; 
            margin: 10px;
            float:  left;
            text-align: center;
        }
        .star {
            font-size: 30px;
            color: gray;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="product">
        <h3><?php echo $product['name']; ?></h3>
        <?php echo $product['producer']; ?><br>
        <?php echo "Cena: " . $product['price'] . "zł"; ?><br>
        <?php echo $product['description']; ?>
        <button onclick="window.location.href='http://localhost:8000/sklep/' ">Wróć Do Kategorii</button>
    </div>

    <div class="addComment">
        <form id="addCommentForm">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <input type="text" maxlength="21" name="author" placeholder="Wpisz nazwę autora">
            <textarea maxlength="255" name="content" placeholder="Wpisz Opinie"></textarea>
            <select name="rating">
                <option value="1">Star1</option>
                <option value="2">Star2</option>
                <option value="3">Star3</option>
                <option value="4">Star4</option>
                <option value="5">Star5</option>
            </select>
            <button type="submit">Dodaj Opinie</button><br>
        </form>
    </div>

    <div class="comments">
    </div>

    <script>
        document.getElementById("addCommentForm").addEventListener("submit", function (event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost:8000/praktyki/src/api/CommentSubmit.php", true);
                xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        alert("Komentarz został dodany!");
                    } else {
                        alert("Wystąpił błąd podczas dodawania komentarza.");
                    }
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
