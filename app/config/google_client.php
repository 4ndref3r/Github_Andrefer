<?php

use Google_Client;

function getGoogleClient() {
    $client = new Google_Client();
    $client->setClientId('373821573018-s7gt4bkal3jrvt76vkpm4c2jcdiug75k.apps.googleusercontent.com');
    $client->setClientSecret('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');
    $client->setRedirectUri('http://localhost/Horarios_MVC/dashboard');
    $client->addScope('email');
    $client->addScope('profile');
    
    return $client;
}