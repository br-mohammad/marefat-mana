<?php

return [

    'defaults' => [
        'guard' => 'student',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    */
    'guards' => [
        'manager' => [
            'driver' => 'session',
            'provider' => 'managers',
        ],
        'teacher' => [
            'driver' => 'session',
            'provider' => 'teachers',
        ],
        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    */
    'providers' => [
        'managers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Manager::class,
        ],
        'teachers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Teacher::class,
        ],
        'students' => [
            'driver' => 'eloquent',
            'model' => App\Models\Student::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    */
    'passwords' => [],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
