<?php

require_once('vendor/autoload.php');
require_once('config.php');

use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;


$guzzle = new \GuzzleHttp\Client();
$url = 'https://login.microsoftonline.com/' . $o365TenantId . '/oauth2/v2.0/token';
$token = json_decode($guzzle->post($url, [
    'form_params' => [
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'scope' => 'https://graph.microsoft.com/.default',
        'grant_type' => 'client_credentials',
    ],
])->getBody()->getContents());
$accessToken = $token->access_token;

$graph = new Graph();
        $graph->setAccessToken($accessToken);

        $user = $graph->createRequest("GET", "/users")
                      ->setReturnType(Model\User::class)
                      ->execute();
        print_r($user);

?>
