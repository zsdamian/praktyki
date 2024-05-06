<?php

namespace App;

class Bootstrap {

    private const CONFIG_DATABSE = [
        'host' => 'mysql',
        'user' => 'root',
        'pass' => 'root',
        'db' => 'praktyki'
    ];

    public function run(): void
    {
        /**
         * $request = new Request();
         * $request->getUri(); // return /jakas/tam/strona; === $_GET['$1'];'
         * $request->getQuery(); ?dupa=costam    [dupa => 'costam']
         * $request->getPost();
         */

        echo base64_decode('S29ybmVsLCBHZWp1ICxiaWVyeiBtaWVjeiBkbyByxJlraSBpIHdhbGN6');
        echo '<br/>';

        $conn = new \mysqli(self::CONFIG_DATABSE['host'], self::CONFIG_DATABSE['user'], self::CONFIG_DATABSE['pass'], self::CONFIG_DATABSE['db']);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "Connected to MySQL successfully.";


        $conn->close();
    }

}
