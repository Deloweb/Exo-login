<?php

// activation du système d'autoloading de Composer
require __DIR__.'/../vendor/autoload.php';

// instanciation du chargeur de templates
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');

// instanciation du moteur de template
$twig = new \Twig\Environment($loader, [
    // activation du mode debug
    'debug' => true,
    // activation du mode de variables strictes
    'strict_variables' => true,
]);

// chargement de l'extension Twig_Extension_Debug
$twig->addExtension(new \Twig\Extension\DebugExtension());

session_start();

$user = require __DIR__.'/user-data.php';

$errors = [];

if (!$errors){
    $_SESSION['login'] = $user['login'];
    $_SESSION['user_id'] = $user['password'];
}

// affichage du rendu d'un template
echo $twig->render('login-write-twig.html.twig', [
    // transmission de données au template
]);