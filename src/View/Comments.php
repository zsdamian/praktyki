<!DOCTYPE html>
<html>
<head>
    <title>Komentarze</title>
</head>
<body>
    <h1>Komentarze:</h1><br>
    <ul>
    <?php foreach ($Comments as $Comment):?>
            <li> 
                <?php echo $Comment['Nick']; ?> Napisał:<br> <?php echo $Comment['CommentText']; ?><br> Dnia: <?php echo $Comment['Date'];?><br>________________________
            </li>
        <?php endforeach; ?>
    </ul><br>
    <form>
    <input type="text" id="nick" name="nick"><br>
    <textarea id="comment" name="comment" rows="3" cols="50"></textarea><br>
    <button type=submit>Dodaj Komentarz</button>
    </form>
</body>
</html>
