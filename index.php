<?php
switch ($_SERVER['REQUEST_URI']) {
  case '/':
  include 'main.php';
  break;
  case '/privacy_policy.php':
  include 'privacy_policy.php';
  break;
  case '/collections.php':
  include 'collections.php';
  break;
  case '/bill_levkoff_images.php':
  include 'bill_levkoff_images.php';
  break;
  default:
  include 'main.php';
  break;
}
?>
