<?php
switch ($_SERVER['REQUEST_URI']) {
  case '/':
  include 'main.php';
  break;
  case '/privacy_policy.php':
  include 'privacy_policy.php';
  break;
  default:
  include 'main.php';
  break;
}
?>
