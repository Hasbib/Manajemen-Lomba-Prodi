<?php

return [

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => ('446426747430-o4ukvslhkf3g97v1rc9gp5steunqtqvh.apps.googleusercontent.com'),
        'client_secret' => ('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'),
        'redirect' => ('http://localhost:8000/authorized/google/callback'),
      
    ],

];
