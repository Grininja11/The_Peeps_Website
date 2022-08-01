<?php

$ServerName = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBName = "AccountSYS";

$connect = mysqli_connect($ServerName, $DBUsername, $DBPassword, $DBName);

if (!$connect) {
  # Heh "Die" function...
  die("Connection Failed: " . mysqli_connect_error());
}