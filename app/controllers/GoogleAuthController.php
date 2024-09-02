<?php

use Google_Client;
use Google_Service_Oauth2;
use Exception;

class GoogleAuthController
{
    private $client;

    public function __construct()
    {
        $this->client = getGoogleClient();
    }

    public function login()
    {
        $authUrl = $this->client->createAuthUrl();
        header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
        exit();
    }

    public function callback()
    {
        if (!isset($_GET['code'])) {
            // Maneja el error (puedes redirigir al usuario con un mensaje de error)
            return;
        }

        $this->client->fetchAccessTokenWithAuthCode($_GET['code']);
        $token = $this->client->getAccessToken();
        $this->client->setAccessToken($token);

        $oauth2 = new Google_Service_Oauth2($this->client);
        $userInfo = $oauth2->userinfo->get();

        // Aquí puedes almacenar la información del usuario en la sesión o en la base de datos
        $_SESSION['user'] = [
            'id' => $id->id,
            'name' => $name->name,
            'email' => $userInfo->email,
            'picture' => $userInfo->picture,
        ];

        header('Location: /');
        exit();
    }
}
