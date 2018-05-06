<?php

sp1_autoload_register(function($class) {
  $prefix = 'MyApp\\';
  if (strpos($class, $prefix) === 0) {
    $className = substr($class, strlen($prefix));
    $classFilePath = __DIR__ . '/../lib/' . str_replace('\\', '/', $cllassName) .
    '.php';
    if (file_exists($classFilePath)) {
      require $classFilePath;
    }
  }
});
