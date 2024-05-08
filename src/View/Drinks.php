<!DOCTYPE html>
<html>
<head>
    <title>Napoje</title>
</head>
<body>
    <h1>Lista napojów</h1>
    <ul>
        <?php $ProductsNumber = 0; ?>
        <?php foreach ($Drinks as $Drink):?>
            <li> 
                <?php $ProductsNumber++;?>   
                <?php echo $Drink['name']; ?> - <?php echo $Drink['voltage']; ?>V - <?php echo $Drink['price']; ?> zł
            </li>
        <?php endforeach; ?>
        <?php echo "<br>Liczba produktów: " . $ProductsNumber . "<br><br>" ?>
    </ul>
</body>
</html>
