<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' =>'2124365541133174',         // Your GitHub Client ID
    'client_secret' =>'b338c32581816f869585265aa8419dc0', // Your GitHub Client Secret
    'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
    ],

    'google' => [
    'client_id' => env('GOOGLE_ID'),         // Your GitHub Client ID
    'client_secret' => env('GOOGLE_KEY'), // Your GitHub Client Secret
    'redirect' => env('GOOGLE_URL'),
    ],

];
