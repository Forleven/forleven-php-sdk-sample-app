<?php

include 'autenticacao.php';

if(!empty($_GET['code']))
{
	$code = $_GET['code'];
	$oauth_token = $auth->getAccessToken($code);
	var_dump($oauth_token);
	/**
		{
			'access_token': 'HASH TOKEN HERE',
			'refresh_token': 'HASH TOKEN HERE'
		}
	**/
}