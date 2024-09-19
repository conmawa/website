<?php

# passwords are not visible

$mysqli = new mysqli(
hostname: $host_name,
username: $user_name,
password: $password,
database: $database);

if ($mysqli->connect_errno){
  die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>
