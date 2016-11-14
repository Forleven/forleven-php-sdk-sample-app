<?php

include __DIR__ . '/../../forleven/autoloader.php';

use Forleven\OAuth\OAuth;

$client_id = 'HERE YOUR CLIENT_ID';
$client_secret = 'HERE YOUR CLIENT_SECRET';

$auth = new OAuth($client_id, $client_secret);