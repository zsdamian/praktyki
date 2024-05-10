<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorie produktów</title>

        <style>
           .category-link{
                margin-right: 20px;
           }
      </style>

</head>

<body>
    <h1>Kategorie produktów</h1>
        <?php foreach ($categories as $url => $category): ?>
            <a href="/produkty/<?= $url ?>" class="category-link"><?= $category ?></a>
        <?php endforeach; ?>
</body>
</html>
