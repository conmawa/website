<?php

$host_name = 'db5011469019.hosting-data.io';
$database = 'dbs9675050';
$user_name = 'dbu442703';
$password = 'info_2023';

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
