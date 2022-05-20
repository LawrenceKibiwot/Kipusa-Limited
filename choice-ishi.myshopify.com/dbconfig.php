<?php
$mysqli = new mysqli("localhost","root","","kipusa_beauty");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
