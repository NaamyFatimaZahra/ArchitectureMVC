<?php

namespace App\Core;

class Router{
  private $routes;

   public function __construct(){
    $this->routes = require_once __DIR__ . '/../config/routes.php';
}
    public function dispatch($url){
          $url = str_replace('/public/','',$url);

            if (isset($this->routes[$url])) {
            list($controller, $method)=$this->routes[$url];

            $instance= new $controller();
            $instance->$method();
          }else{
            require __DIR__.'\..\Views\error.php'; 

          }
        }
}