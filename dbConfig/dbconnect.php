<?php

define('DB_NAME', $_SERVER['DATABASE1_NAME']);
define('DB_USER', $_SERVER['DATABASE1_USER']);
define('DB_PASSWORD', $_SERVER['DATABASE1_PASS']);
define('DB_HOST', $_SERVER['DATABASE1_HOST']);

$connection = new mysqli($_SERVER['DATABASE1_NAME'], $_SERVER['DATABASE1_USER'], $_SERVER['DATABASE1_PASS'], $_SERVER['DATABASE1_HOST']);

if($connection->connect_errno)
{
  exit("Database connection Failed. Reason: ".$connection->connect_error);
}



?>
