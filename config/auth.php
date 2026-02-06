<?php

return [

    'defaults' => [
        'guard' => 'web', // default masih web
        'passwords' => 'users',
    ],

'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'admin' => [
        'driver' => 'session',
        'provider' => 'admins',
    ],

    'customer' => [          // <- pastikan ini ada
        'driver' => 'session',
        'provider' => 'customers',
    ],
],

'providers' => [
    'admins' => [
        'driver' => 'eloquent',
        'model' => App\Models\Admin::class,
    ],

    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],

    'customers' => [         // <- dan ini
        'driver' => 'eloquent',
        'model' => App\Models\Customer::class,
    ],
],


    'password_timeout' => 10800,
];
