<?php

const CONFIG_DATABSE = [
    'host' => 'mysql',
    'user' => 'root',
    'pass' => 'root',
    'db' => 'praktyki'
];

echo base64_decode('S29ybmVsLCBHZWp1ICxiaWVyeiBtaWVjeiBkbyByxJlraSBpIHdhbGN6');
echo '<br/>';

$conn = new mysqli(CONFIG_DATABSE['host'], CONFIG_DATABSE['user'], CONFIG_DATABSE['pass'], CONFIG_DATABSE['db']); // używaj PDOMysql , to dodałem tylko żeby sprawdzać czy dobrze postawiłeś środowisko. To ma zniknąć w tej postaci.

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully.";

$conn->close();
