<?php
require_once './config/application.php';
$path = ltrim($_SERVER['REQUEST_URI'], '/');
$temp_path = explode($REQUEST, $path);
$elements = explode('/', $temp_path[1]);
$data = array_filter($elements);
if (count($data) == 0) {
  include "./index.php";
}
else {
  switch ($data[1]) {
    case 'home':
      include "view/home.php";
    break;
    default:
      header('HTTP/1.1 404 Not Found');
    include "view/404.php";
  }
}  
?>
