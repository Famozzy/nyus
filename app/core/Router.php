<?php
namespace App\Core;

class Router {
  private static $routes = [];

  public static function add($method, $path, $controller) {
    self::$routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller
    ];
  }

  public static function run() {
    try {
      $path = '/';
      if(isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];    
      $method = $_SERVER['REQUEST_METHOD'];
  
      foreach(self::$routes as $route) {
        if($route['method'] == $method && $route['path'] == $path) {
          [ $Controller, $function ] = $route['controller'];
          $controller = new $Controller;
          $controller->$function();
          return;
        }
      }

      http_response_code(404);
      include_once VIEW_PATH . '404.php';
    } catch (\Throwable $th) {
      echo $th->getMessage();
    }
  }
}