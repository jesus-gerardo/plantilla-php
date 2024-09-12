<?php

return [
    'driver' => env("SESSION_DRIVE", 'cookie'),
    'expired' => env("SESSION_EXPIRE", 60*60),
    'cookie' => env(
        'SESSION_COOKIE',
        env('APP_NAME', 'COOKIE_PHP').'_session'
    ),
    'domain' => env('SESSION_DOMAIN'),
    'secure' => env('SESSION_SECURE_COOKIE', true),
    'http_only' => env('SESSION_HTTP_ONLY', true),
]
?>