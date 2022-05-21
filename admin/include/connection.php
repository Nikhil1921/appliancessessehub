<?php
define('APP_NAME', 'Appliances Service Hub');

if ($_SERVER['HTTP_HOST'] !== 'localhost') {
  ini_set('display_errors', 0);
  if (version_compare(PHP_VERSION, '5.3', '>='))
  {
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
  }
  else
  {
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
  }
}

$servername = "localhost";
$username = $_SERVER['HTTP_HOST'] === 'localhost' ? "root" : 'hllpugzi_appliancessessehub';
$password = $_SERVER['HTTP_HOST'] === 'localhost' ? "" : '7E{mY2cVvJVN';
$db = $_SERVER['HTTP_HOST'] === 'localhost' ? "appliancessessehub" : 'hllpugzi_appliancessessehub';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error);

function re($var='')
{
  echo "<pre>";
  print_r($var);
  echo "</pre>";
  exit;
}