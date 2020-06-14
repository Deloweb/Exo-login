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

// démarrage de la session
session_start();

$user = require __DIR__.'/user-data.php';

echo $user['login'];

// if (!isset($user['user_id'])) {
//     $url = 'login-twig.php';
//     header("Location: {$url}", true, 302);
//     exit();
// }

// if (isset($user['login'])) {
//     echo "l'utilisateur est connecté";
// } else {
//     echo "l'utilisateur n'est pas connecté";
// }

// affichage du rendu d'un template
echo $twig->render('login-private-twig.html.twig', [
    // transmission de données au template
    
]);