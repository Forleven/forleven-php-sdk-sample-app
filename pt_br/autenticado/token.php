<?php

include __DIR__ . '/../../forleven/autoloader.php';

use Forleven\OAuth\OAuth;

$client_id = 'HERE YOUR CLIENT_ID';
$client_secret = 'HERE YOUR CLIENT_SECRET';
$access_token = 'HERE YOUR ACCESS_TOKEN';

$auth = new OAuth($client_id, $client_secret);
$auth->setAccessToken($access_token);