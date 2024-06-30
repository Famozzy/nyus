<?php
spl_autoload_register(function ($class) {
  // App\Core\Controller -> app/core/Controller.php
  // memecah namespace menjadi array dengan delimiter \
  // -> ['App', 'Core', 'Controller']
  $namespaces = explode('\\', $class);

  // mengubah semua nama namespace menjadi lowercase keculai yang terakhir  
  // -> ['app', 'core', 'Controller']
  for ($i = 0; $i < count($namespaces) - 1; $i++) {
    $namespaces[$i] = strtolower($namespaces[$i]);
  }

  // menggabungkan array namespace menjadi string dengan delimiter /
  // -> app/core/Controller
  $class = implode('/', $namespaces);
  $file = __DIR__ . '/' . $class . '.php';
  if(file_exists($file)) {
    require_once $file;
  } else {
    die("Class $class not found");
  }
});
  