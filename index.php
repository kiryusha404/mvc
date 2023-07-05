<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use application\core\Route;
use application\lib\DB;

spl_autoload_register(function ($class) {
  $path = str_replace('\\', '/', $class.'.php');
  if (file_exists($path))
  {
    require $path;
  }
});

$route = new Route();

$route->run();

function debug($str)
{
  echo '<pre>';
  var_dump($str);
  echo '</pre>';
  exit;
}
// require_once 'application/bootstrap.php';
?>