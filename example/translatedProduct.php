<?php
    require_once 'boot.php';

    $translator = new \Expando\Translator\Translator();
    $translator->setToken($_SESSION['translator_token'] ?? null);
    $translator->setUrl('http://translator.local');

    if (!$translator->isLogged()) {
        die('Translator is not logged');
    }

    try {
        // return 10 not commited products
        $response = $translator->listTranslatedProduct();
        foreach ($response->getProducts() as $product) {

            // SAVE TEXT implement

            // confirm saving text
            $translator->commitProduct($product);
        }
    }
    catch (\Expando\Translator\Exceptions\TranslatorException $e) {
        die($e->getMessage());
    }

    echo 'Status: ' . $response->getStatus() . '<br />';
    foreach ($response->getProducts() as $product) {
        echo '<br />';
        echo 'Hash: ' . $product->getHash() . '<br />';
        echo 'Title: ' . $product->getTitle() . '<br />';
        echo 'Description: ' . $product->getDescription() . '<br />';
    }

