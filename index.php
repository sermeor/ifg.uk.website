<?php
switch ($_SERVER['REQUEST_URI']) {
  case '/':
  include 'main.html';
  break;
  case '/privacy_policy.html':
  include 'privacy_policy.html';
  break;
  case '/collections.html':
  include 'collections.html';
  break;
  case '/bill_levkoff_images.html':
  include 'bill_levkoff_images.html';
  break;
  default:
  include 'main.html';
  break;
}
?>
