<?php 
// return [
//     'serverKey' => env('MIDTRANS_SERVER_KEY'),
//     'isProduction' => env('MIDTRANS_IS_PRODUCTION'),
//     'isSanitized' => env('MIDTRANS_IS_SANITIZED'),
//     'is3ds' => env('MIDTRANS_IS_3DS')
// ];
return [
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => true,
    'is_3ds' => true,
];


?>