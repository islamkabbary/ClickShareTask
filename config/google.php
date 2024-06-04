<?php

use Google\Service\Sheets;

/*

|----------------------------------------------------------------------------
| Google OAuth 2.0 access
|----------------------------------------------------------------------------
|
| Keys for OAuth 2.0 access, see the API console at
| https://developers.google.com/console
|
*/
return [
    'client_id' => env('GOOGLE_CLIENT_ID', ''),
    'client_secret' => env('GOOGLE_CLIENT_SECRET', ''),
    'redirect_uri' => env('REDIRECT_FOR_GOOGLE', ''),
    'scopes' => [Sheets::DRIVE, \Google\Service\Sheets::SPREADSHEETS],
    'access_type' => 'online',
    'approval_prompt' => 'auto',
    'prompt' => 'consent', //"none", "consent", "select_account" default:none
    // or Service Account
    'file'    => storage_path('credentials.json'),
    'enable'  => env('GOOGLE_SERVICE_ENABLED', true),
];
