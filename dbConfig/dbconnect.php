<?php

$dbPassword = "skerriesscc13";
$dbUserName = "TheRobbieJenkinson";
$dbServer = "localhost";
$dbName = "myworld";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
  exit("Database connection Failed. Reason: ".$connection->connect_error);
}

?>
