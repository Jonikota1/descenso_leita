<?php

return[
    'client_id' => env('PAYPAL_CLIENT_ID'),
    'secret' => env('PAYPAL_SECRET'),

    'settings' => [
    'mode'> env('PAYPAL_MODE','sandbox '),
    'http.Connecti onTimeOut' => 30,
    'Log. LogEnabled' => true,
    'Log. FileName' => storage_path('/logs/paypal. log '),
    'Log. LogLevel' => 'ERROR'
    ]
];