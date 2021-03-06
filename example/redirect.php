<?php

use Expando\Translator\Exceptions\LoginException;

require_once 'boot.php';

try {
    $login = new \Expando\Translator\Login(
        CLIENT_ID,
        CLIENT_SECRET,
        'http://translator-package.local/redirect.php',
        URL
    );
    $login->addScope('read-translation');
    $login->addScope('create-translation');
    $login->addScope('read-project');
    $token = $login->getToken();
} catch (LoginException $e) {
    die($e->getMessage());
}

if ($token !== null)
{
    // save to session for example

    $_SESSION['translator_token'] = $token;
    header('Location: index.php');
}