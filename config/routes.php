<?php

// moje zdanie: zrób to samo w Json i obsłuż w routerze

return [
    'kontakt' => function($request)
    {
        echo 'Kontakt';
    },
    'opinie' => function($request)
    {
        echo 'opinie';
        print_r($request->getQuery());
    },
    'dupa' => function($request)
    {
        echo 'damian gej';
        print_r($request->getQuery());
    }
    
];