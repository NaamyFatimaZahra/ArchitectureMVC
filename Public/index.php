<?php

declare(strict_types=1);

require_once  '../vendor/autoload.php';

use App\Core\Router;

try {
    
    $url = $_SERVER['REQUEST_URI'] ;
  
      if (!class_exists(Router::class)) {
        throw new Exception("La classe Router n'existe pas.");
    }

    $router = new Router();
    $router->dispatch($url);

} catch (Exception $e) {
    // Gestion des erreurs (log ou affichage propre)
    http_response_code(500);
    echo "Une erreur est survenue : " . htmlspecialchars($e->getMessage());
}
