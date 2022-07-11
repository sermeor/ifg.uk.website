<?php
switch ($_SERVER['REQUEST_URI']) {
  case '/':
  include 'main.php';
  break;
  default:
  include 'main.php';
  break;
}
?>
